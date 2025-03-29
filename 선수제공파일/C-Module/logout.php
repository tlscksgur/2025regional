<?php
session_start();
session_destroy();

var_dump($_SESSION);
// echo  "<script>location.href='/'</script>";
header("Location: /");

