<?php
function hashPw($pw)
{
  $slat = bin2hex(random_bytes(32));
  $h_pw = hash("sha256", $slat . $pw);
  return [$h_pw, $slat];
}