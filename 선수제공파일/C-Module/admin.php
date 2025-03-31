<?php
session_start();
require_once "db.php";

[$h_psw, $salt] = hashPsw("1111");

$pswWrong = "1234";
$pswCurrect = "1111";

$h_cu = hash("sha256" , $salt . $pswCurrect );
$h_cu = hash("sha256" , $salt . $pswWrong );

if($h_cu ==  $h_psw){
  echo "맞음";
}else{
  echo "틀림";
}