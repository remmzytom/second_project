<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);

// var_dump($uri);

switch ($uri[1]){

  case '':
  include APP_PATH."/view/home.php";
  break;

  case 'contact':
  include APP_PATH."/view/contact.php";
  break;

  case 'adindex':
  include APP_PATH."/view/adindex.php";
  break;

  case 'doc-dashboard':
  include APP_PATH."/view/doctors-dashboard.php";
  break;


  case 'appointments':
  include APP_PATH."/view/appointments.php";
  break;

  case 'patients':
  include APP_PATH."/view/patients.php";
  break;

  case 'schedule-time':
  include APP_PATH."/view/schedule-time.php";
  break;

  case 'change-password':
  include APP_PATH."/view/change-password.php";
  break;

  case 'login':
  include APP_PATH."/view/login.php";
  break;

  case 'pat-dashboard':
  include APP_PATH."/view/patient-dashboard.php";
  break;

  case 'book-appointment':
  include APP_PATH."/view/book-appointment.php";
  break;

  case 'register':
  include APP_PATH."/view/register.php";
  break;

  case 'services':
  include APP_PATH."/view/services.php";
  break;

  case 'shop':
  include APP_PATH."/view/shop.php";
  break;

  case 'cart':
  include APP_PATH."/view/cart.php";
  break;

  case 'checkout':
  include APP_PATH."/view/checkout.php";
  break;

  case 'about':
  include APP_PATH."/view/about.php";
  break;

  case 'pricing':
  include APP_PATH."/view/pricing.php";
  break;

  case 'gallery':
  include APP_PATH."/view/gallery.php";
  break;

  case 'adlogin':
  include APP_PATH."/view/adlogin.php";
  break;

  case 'adsign_up':
  include APP_PATH."/view/adsign_up.php";
  break;





}

 ?>
