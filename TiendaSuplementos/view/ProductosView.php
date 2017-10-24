<?php

class ProductosView extends View
{
  function mostrarProductos($productos,$categorias)
  {
    $this->smarty->assign('titulo','MVC Productos');
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
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
}

?>
