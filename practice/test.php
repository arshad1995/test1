<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("902046549392-4qjs88lk4vtf6n11uh04u7uo37ee7871.apps.googleusercontent.com");
$gClient->setClientsecret("sEjIsDvjeecqZRXaOhgBgVny");
$gClient->setApplicationName("CPILogin Tutorial");
$gClient->setRedirectUri("http://localhost/practice/welcome.php");
$gClient->addScope ("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
