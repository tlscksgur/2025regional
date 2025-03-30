<?php
session_start();
session_destroy();

echo "<script>location.href='/'</script>";
//var_dump($_SESSION);
// header("Location: /");