<?php
function hashPsw($psw)
{
  $slat = bin2hex(random_bytes(32));
  $h_psw = hash("sha256", $slat . $psw);
  return [$h_psw, $slat];
}