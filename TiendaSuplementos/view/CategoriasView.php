<?php

class Categoriasview extends View
{
  public function create()
  {
    $this->assignarTareaForm();
    $this->smarty->assign('titulo','Crear Categorias');
    $this->smarty->display('templates/Admin/crearCategoria.tpl');
  }
  function errorCrear($error,$nombre,$descripcion)
  {
    $this->smarty->assign('titulo','MVC error');
    $this->assignarTareaForm($nombre,$descripcion);
    $this->smarty->assign('error',$error);
    $this->smarty->display('templates/Admin/crearCategoria.tpl');
  }
  private function assignarTareaForm($nombre='', $descripcion='')
  {
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('descripcion', $descripcion);
  }
  public function categoriasAdmin($categorias)
  {
    $this->smarty->assign('titulo','Categorias');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('templates/Admin/categorias.tpl');
  }
  public function categorias($categorias)
  {
    $this->smarty->assign('titulo','Categorias');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('templates/Visit/categorias.tpl');
  }
}

 ?>
