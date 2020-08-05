<?php
// Import
use Hybridauth\Hybridauth;

class Auth{

  protected static $allow = ['Facebook', 'Google'];

  protected static function issetRequest(){
    if(isset($_GET['login'])){
      if(in_array($_GET['login'], self::$allow)){
        return true;
      }
    }
    return false;
  }

  public static function getuserAuth(){
    if(self::issetRequest()){
      $service = $_GET['login'];
      $hybridAuth = new Hybridauth(__DIR__.'\redes.php');
      $adapter = $hybridAuth->authenticate($service);
      $userProfile = $adapter->getUserProfile();
      self::storeUser($service,$userProfile);
      //Redireccionar usuario
      header("Location: http://localhost/VSARENA/");
    }
  }

  protected static function storeUser($service, $socialUser){
    $db = new PDO("mysql:host=localhost;dbname=vsarena", "root", "");

    $user = self::getExistingUser($socialUser, $db);

    if($user === null){

      $user = array(
        'name' => $socialUser->firstName,
        'email' => $socialUser->email
      );

      $ps = $db->prepare("INSERT INTO usuarios (usuario,emailUsuario,fechaNacimiento,passUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon) VALUES(:name, :email, NULL,NULL, '0', '0','0','1')");
      $ps->execute($user);

      $user['id'] = $db->lastInsertId();

      self::storeUserSocial($user, $socialUser, $service, $db);

    }else{

      if(!self::checkUserSocialService($user, $socialUser, $service, $db)){
        self::storeUserSocial($user, $socialUser, $service, $db);
      }

    }

    self::login($user);
  }

  protected static function getExistingUser($socialUser,$db){
    $ps = $db->prepare("SELECT * FROM usuarios WHERE emailUsuario = :email");
      $ps->execute([
        ':email' => $socialUser->email
      ]);

      $result = $ps->fetchAll(PDO::FETCH_ASSOC);

      return $result ? $result[0] : null;
  }

  protected static function storeUserSocial($user, $socialUser, $service, $db){
    $ps = $db->prepare("INSERT INTO usuarios_redes (iduser, idsocial, servicio) VALUES(:user_id, :social_id, :service)");
    $ps->execute([
    ':user_id' => $user['id'],
    ':social_id' => $socialUser->identifier,
    ':service' => $service
    ]);
  }
  protected static function checkUserSocialService($user, $socialUser, $service, $db){
    $ps = $db->prepare("SELECT * FROM users_social WHERE user_id = :user_id AND service = :service AND social_id = :social_id");
    $ps->execute([
    ':user_id' => $user['id'],
    ':service' => $service,
    ':social_id' => $socialUser->identifier
    ]);

    return (bool) $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  public static function isLogin(){
    return (bool) isset($_SESSION['user']);
  }

  protected static function login($user){
    $_SESSION['user'] = $user;
  }

  public static function logout(){
    if(self::isLogin()){
      unset($_SESSION['user']);
    }
  }
}
?>