<?php

class SafeController extends Controller
{
  protected $view;
  protected $model;

  function __construct()
  {
    session_start();
    if (isset($_SESSION['email'])) {
      if (time() - $_SESSION['LAST_ACTIVITY'] > 1000) {
            header('Location: '.LOGOUT);
            die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
    else {
      header('Location: '.LOGIN);
      die();
    }
  }
}


?>
