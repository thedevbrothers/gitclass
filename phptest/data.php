<?php


$e = $_REQUEST['email'];


echo $e;


setcookie('email', $e, time() + 50, "/");
