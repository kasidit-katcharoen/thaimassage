<?php
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
session_start();
require 'Header.php';
require 'HtmlTag/Navbar.php';
echo '<div class="background-1">';

if (isset($_SESSION["user_id"])) {
  if ($_SESSION["user_type"]== 'ผู้ใช้งานทั่วไป') {
  }elseif($_SESSION["user_type"] == 'ผู้ดูแลระบบ'){
    echo '
    <script>
      window.location.href ="Admin.php";
    </script>
    ';
  }
}else {

}

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'News':
      require 'User/News/News.php';
      break;
    case 'DataDoctor':
      require 'User/DataDoctor/DataDoctor.php';
      break;
    case 'Contact':
      require 'User/Contact/Contact.php';
      break;
    case 'Service':
      require 'User/Service/Service.php';
      break;
    case 'Reserve':
      require 'User/Reserve/Reserve.php';
      break;
    case 'DataUser':
      require 'User/DataUser/DataUser.php';
      break;
    case 'HistoryReserve':
      require 'User/HistoryReserve/HistoryReserve.php';
      break;
    case 'HistoryHospital':
      require 'User/HistoryHospital/HistoryHospital.php';
      break;
    default:'';
  }
}else {
  require 'User/HomeUser/Menu.php';
  require 'User/HomeUser/HomeNews/HomeNews.php';
  require 'User/HomeUser/ServiceHome.php';
  require 'User/HomeUser/Knowledge.php';
  require 'User/HomeUser/advice.php';
  require 'User/HomeUser/taboo.php';
}
echo '</div>';
require 'HtmlTag/NavFoot.php';
require 'Footer.php';
?>
