<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-jubaal.fjeclot.net',
    'username' => $_POST["usuari"],
    'password' => $_POST["ctsnya"],
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net'
];
$ldap = new Ldap($opcions);
$ldap->bind();

if($ldap==true){
    header("Location: datos.php");
}else{
    printf("no funciona");
}

?>