<?php

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    'index'=> 'ProductosController#productos',
    'indexAdmin'=> 'ProductosController#productosAdmin',
    'proteinasAdmin'=> 'ProductosController#proteinasAdmin',
    'creatinasAdmin'=> 'ProductosController#creatinasAdmin',
    'preentrenosAdmin'=> 'ProductosController#preentrenosAdmin',
    'ganadoresAdmin'=> 'ProductosController#ganadoresAdmin',
    'categoriasAdmin'=> 'CategoriasController#categoriasAdmin',
    'proteinas'=> 'ProductosController#proteinas',
    'creatinas'=> 'ProductosController#creatinas',
    'preentrenos'=> 'ProductosController#preentrenos',
    'ganadores'=> 'ProductosController#ganadores',
    'categorias'=> 'CategoriasController#categorias',
    'login'=>'LoginController#login',
    'logout' => 'LoginController#destroy',
    'verificarUsuario'=>'LoginController#verify',
    'agregarProducto'=>'ProductosController#createProducto',
    'guardarProducto'=>'ProductosController#storeProducto',
    'borrarProducto'=>'ProductosController#deleteProducto',
    'borrarCategoria'=>'CategoriasController#deleteCategoria',
    'agregarCategoria'=>'CategoriasController#createCategoria',
    'guardarCategoria'=>'CategoriasController#storeCategoria',
  ];
}
?>
