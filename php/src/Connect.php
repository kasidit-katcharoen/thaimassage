
<?php
  $servername = "db";
  $username = "root";
  $password = "MYSQL_ROOT_PASSWORD";
  $db = "thaimassage";

  $dbcon = mysqli_connect($servername, $username,$password,$db);
  //ตั้งภาษาไทย
  $dbcon -> set_charset("utf8");

  ?>
