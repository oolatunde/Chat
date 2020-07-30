<?php

 session_start();
 $_SESSION['ID'] = 12345;
echo session_id();
 define('LOGGED_IN', true);

 require 'classes/Core.php';
 require 'classes/Chat.php';
?>
