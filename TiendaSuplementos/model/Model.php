<?php

class Model
{
  protected $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=tienda_suplementos;charset=utf8'
    , 'root', '');
  }
}

?>
