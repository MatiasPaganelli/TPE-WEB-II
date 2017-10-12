<?php

class ProductosView extends View
{
  function createProducto()
  {
    $this->assignarTareaForm();
    $this->smarty->assign('titulo','Crear Productos');
    $this->smarty->display('templates/Admin/crearProducto.tpl');
  }

  function errorCrear($error,$categoria,$nombre,$precio,$peso)
  {
    $this->smarty->assign('titulo','MVC error');
    $this->assignarTareaForm($categoria,$nombre,$precio,$peso);
    $this->smarty->assign('error',$error);
    $this->smarty->display('templates/Admin/crearProducto.tpl');
  }

  private function assignarTareaForm($categoria=0, $nombre='', $precio='',$peso='')
  {
    $this->smarty->assign('categoria', $categoria);
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('precio', $precio);
    $this->smarty->assign('peso', $peso);

  }

    function borrarProducto($id_producto)
    {
      $this->smarty->assign('producto',$id_producto);
      $this->smarty->display('templates/Admin/productos.tpl');
    }

  function mostrarProductos($productos)
  {
    $this->smarty->assign('titulo','MVC Productos');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Visit/index.tpl');
  }

function proteinas($productos){
  $this->smarty->assign('titulo','Proteinas');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/proteinas.tpl');
}

function creatinas($productos){
  $this->smarty->assign('titulo','Creatinas');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/creatinas.tpl');
}

function preentrenos($productos){
  $this->smarty->assign('titulo','Pre Entrenos');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/preentrenos.tpl');
}

function ganadores($productos){
  $this->smarty->assign('titulo','Ganadores');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/ganadores.tpl');
}
function mostrarProductosAdmin($productos)
{
  $this->smarty->assign('titulo','MVC Productos');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Admin/indexAdmin.tpl');
}

function proteinasAdmin($productos){
$this->smarty->assign('titulo','Proteinas');
$this->smarty->assign('productos',$productos);
$this->smarty->display('templates/Admin/proteinas.tpl');
}

function creatinasAdmin($productos){
$this->smarty->assign('titulo','Creatinas');
$this->smarty->assign('productos',$productos);
$this->smarty->display('templates/Admin/creatinas.tpl');
}

function preentrenosAdmin($productos){
$this->smarty->assign('titulo','Pre Entrenos');
$this->smarty->assign('productos',$productos);
$this->smarty->display('templates/Admin/preentrenos.tpl');
}
function ganadoresAdmin($productos){
$this->smarty->assign('titulo','Ganadores');
$this->smarty->assign('productos',$productos);
$this->smarty->display('templates/Admin/ganadores.tpl');
}

}

?>
