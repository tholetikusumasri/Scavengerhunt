<?php
  session_start();
  if(isset($_SESSION["un"])){
    Session_destroy();
    header('Location:index.php');
  }
  ?>