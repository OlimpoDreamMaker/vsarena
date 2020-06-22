<?php
//Crear y enviar Codigo de validacion de email
function enviarCodigoValidacion($conexion, $id, $imagenes){
  $undia = time() + 84600;
  //Id Usuario, dos numeros del 1 al 9, una letra mayuscula, un numero del 1 al 9 y una letra minuscula
  $pass = $id . rand(0,9) . rand(0,9) . chr(rand(65,90)) . rand(0,9) . chr(rand(97,122));
  setcookie("codigoEmail",$pass,$undia);
  $mensaje = "¡Bienvenido hoyosjuanmanuel1!<br>Puedes confirmar tu email a través del siguiente enlace";
  $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
  $rs = mysqli_query($conexion, $consulta);
  if($fila = mysqli_fetch_assoc($rs)){
    $foto = $fila['avatarUsuario'];
    $usuario = $fila['usuario'];
    $from = "vsarena@email.com";//Cambiar y configurar hosting
    $to = $fila['emailUsuario'];//email del usuario
    $subject = "Validacion";
    $message = "
                <table style='border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;width:100%;display:table;padding:'>
                  <tbody>

                    <tr style='vertical-align:top;padding:0' align='left'>
                      <td class='m_-2108891298082931803small-12 m_-2108891298082931803columns' style='word-wrap:normal;border-collapse:collapse!important;width:616px;margin:0 auto;padding:0 16px 16px' align='left' valign='top'>

                        <table style='border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;width:100%;padding:0'>
                        <tbody>
                          <tr style='vertical-align:top;padding:0' align='left'>
                          
                            <th style='font-weight:normal'>

                              <div align='center'>

                                <div style='display:inline-block;border-radius:50%;box-sizing:content-box;width:72px;height:72px;border:1px solid #e8e8e8'>
                                  <img src='$imagenes/$foto' style='outline:none;text-decoration:none;width:auto;max-width:100%;clear:both;display:block;vertical-align:top;height:auto;border-radius:50%;color:transparent' class='CToWUd'>
                                </div>

                              </div>

                              <h2 style='font-weight:500;letter-spacing:-0.015em;line-height:1.29;word-wrap:normal;font-size:26px;margin:0 0 10px' align='center'>¡Bienvenido a VsArena $usuario</h2>

                              <div style='margin-bottom:30px;font-size:18px;color:#848484' align='center'>
                                Puedes <span class='il'>confirmar</span> <span class='il'>tu</span> <span class='il'>email</span> a través del siguiente enlace:
                              </div>

                              <p style='margin:0 0 20px' align='center'>
                                <a 
                                class='m_-2108891298082931803btn' 
                                href='https://vsarena.net/validacion/$pass/'
                                style='color:#f02d00;text-decoration:none;display:inline-block;font-weight:bold;line-height:18px;text-align:center;background-color:#fff;border-radius:3px;padding:6px 20px;border:1px solid rgba(240,45,0,0.3)' 
                                target='_blank' 
                                data-saferedirecturl='https://www.google.com/url?q=https://vsarena.net/validacion/$pass'>
                                <span class='il'>Confirmar</span> mi cuenta</a>
                              </p>

                            </th>

                            <th class='m_-2108891298082931803expander' style='width:0;font-weight:normal;padding:0'>
                            </th>

                          </tr>
                        </tbody>
                        </table>

                      </td>
                    </tr>

                  </tbody>
                </table>";
    $headers = "De:" . $from;
    mail($to,$subject,$message, $headers);
  }
}
//Verificar codigo de email
function verificarCodigoEmail($conexion,$id,$pass,$imagenes){
  if(isset($_COOKIE['codigoEmail'])){
    if($_COOKIE['codigoEmail'] == $pass){
      $consulta = "UPDATE usuarios SET validado='1'";
      mysqli_query($conexion,$consulta);
      return true;
    }else{
      enviarCodigoValidacion($conexion,$id,$imagenes);
      return "Error en reconocer el codigo de validacion, se ha enviado un email con el nuevo codigo de validacion";
    }
  }else{
    enviarCodigoValidacion($conexion,$id,$imagenes);
    return "Su codigo de validacion ya vencio, se ha enviado un email con el nuevo codigo de validacion";
  }
}
?>