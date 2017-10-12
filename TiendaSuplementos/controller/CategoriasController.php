<?php

include_once 'view/Categoriasview.php';
include_once 'model/CategoriasModel.php';

class CategoriasController extends SafeController
{
  function __construct()
  {
    $this->view=new CategoriasView();
    $this->model=new CategoriasModel();
  }
  public function categoriasAdmin(){
    $categorias=$this->model->getCategorias();
    $this->view->categoriasAdmin($categorias);

  }
  public function categorias(){
    $categorias=$this->model->getCategorias();
    $this->view->categorias($categorias);

  }

  public function deleteCategoria($params)
  {
    $id_categoria = $params[0];
    $this->model->borrarCategoria($id_categoria);
    header('Location: '.CATEGORIASADMIN);
  }
  public function createCategoria()
  {
    $this->view->create();
  }

    public function storeCategoria()
    {
      $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
      $descripcion=isset($_POST['descripcion']) ? $_POST['descripcion']: '';

      if ((isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
       (isset($_POST['descripcion']) && !empty($_POST['descripcion'])))
      {
        $this->model->storeCategoria($nombre,$descripcion);
        header('Location: '.CATEGORIASADMIN);
      }
      else{
        $this->view->errorCrear("Todos los campos son requeridos",$nombre,$descripcion);
      }
    }

}

 ?>
