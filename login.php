<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 18/10/2015
 * Time: 12:11
 */
$pwdValido="1234";
$usrValido="carlos";

$usr=isset($_GET['usuario'])?$_GET['usuario']:$_POST['usuario'];
$pwd=isset($_GET['password'])?$_GET['password']:$_POST['password'];

if($usrValido==$usr&&$pwdValido==$pwd){
    echo true;
}else{
    echo false;
}
?>