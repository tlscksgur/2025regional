<?php
session_start();
require_once "db.php";

function hashPw($pw)
{
  $slat = bin2hex(random_bytes(32));
  $h_pw = hash("sha256", $slat . $pw);
  return [$h_pw, $slat];
}

[$h_pw, $salt] = hashPw("1111");

$pswWrong = "1234";
$pswCurrect = "1111";

$h_cu = hash("sha256" , $salt . $pswCurrect);
$h_cu = hash("sha256" , $salt . $pswWrong);

if($h_cu == $h_psw){
  echo "맞음";
}else{
  echo "틀림";
}