<?php
//Callback redes sociales
return array(
  "base_url" => "http://localhost/VSARENA/BackEnd/hydridauth.php",
  "providers" => array(
    "Twitter" => array(
      "enabled" => true,
      "keys" => array(
        "key" => "",
        "secret" => ""
      ),
      "includeEmail" => true,
      "includebirthDay" => true,
      "includebirthMonth" => true,
      "includebirthYear" => true,
      "includephotoURL" => true
    ),
    "Facebook" => array(
      "enabled" => true,
      "keys" => array(
        "id" => "383123535980009",
        "secret" => "91356f2c41be576b83c6e062fc5f55a6"
      ),
      "scope" => "email,birthDay,birthMonth,birthYear,photoURL"
    ),
    "Google" => array(
      "enabled" => true,
      "keys" => array(
        "id" => "221166330314-cimiht2abro676mvgqg1r8308fpn10l1.apps.googleusercontent.com",
        "secret" => "5Z7oh_kjFjCy5OOfkcu6QceF"
      )
    )
  )
);
?>