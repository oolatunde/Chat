<?php
  require 'core/init.php';
  echo $_SESSION['ID'];
  session_start();
  $_SESSION['user'] = (isset($_GET['user']) === true ? (int)$_GET['user'] : 0);

  //require 'core/classes/Core.php';
  //require 'core/classes/Chat.php';
  //echo $_SESSION['user'];
  //$chat = new Chat();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <title>Ajax chat</title>
    <link rel ="stylesheet" href = "css/style.css">
  </head>
  <body>
    <div class="chat">
      <div class="messages">


      </div>
      <textarea class="entry" placeholder="This is a textarea"></textarea>
    </div>
    <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="js/chat.js"></script>
  </body>
</html>
