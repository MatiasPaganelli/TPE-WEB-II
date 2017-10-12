<?php


include_once 'view/Productosview.php';
include_once 'model/ProductosModel.php';

class ProductosController extends SafeController
{

  function __construct()
  {
    $this->view=new ProductosView();
    $this->model=new ProductosModel();

  }
  public function createProducto()
  {
    $this->view->createProducto();
  }

  public function storeProducto()
  {
    $categoria= isset($_POST['id_categoria']) ? $_POST['id_categoria'] : 0;
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $precio=isset($_POST['precio']) ? $_POST['precio']: 0;
    $peso=isset($_POST['peso']) ? $_POST['peso'] : 0;

    if ((isset($_POST['nombre']) && !empty($_POST['nombre']))
     && (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
     (isset($_POST['precio']) && !empty($_POST['precio'])) && (isset($_POST['peso']) && !empty($_POST['peso'])))
    {
      $this->model->storeProducto($categoria,$nombre,$precio,$peso);
      header('Location: '.HOMEADMIN);
    }
    else{
      $this->view->errorCrear("Todos los campos son requeridos",$categoria,$nombre,$precio,$peso);
    }
  }
  public function deleteProducto($params)
  {
    $id_producto = $params[0];
    $this->model->borrarProducto($id_producto);
    header('Location: '.HOMEADMIN);
  }
  public function productosAdmin()
  {
    $productos=$this->model->getProductos();
    $this->view->mostrarProductosAdmin($productos);
  }

  public function proteinasAdmin(){
    $productos=$this->model->getProductos();
    $this->view->proteinasAdmin($productos);

  }
  public function creatinasAdmin(){
    $productos=$this->model->getProductos();
    $this->view->creatinasAdmin($productos);

  }
  public function preentrenosAdmin(){
    $productos=$this->model->getProductos();
    $this->view->preentrenosAdmin($productos);

  }

  public function ganadoresAdmin(){
    $productos=$this->model->getProductos();
    $this->view->ganadoresAdmin($productos);

  }
  public function productos()
  {
    $productos=$this->model->getProductos();
    $this->view->mostrarProductos($productos);
  }

  public function proteinas(){
    $productos=$this->model->getProductos();
    $this->view->proteinas($productos);

  }
  public function creatinas(){
    $productos=$this->model->getProductos();
    $this->view->creatinas($productos);

  }
  public function preentrenos(){
    $productos=$this->model->getProductos();
    $this->view->preentrenos($productos);

  }

  public function ganadores(){
    $productos=$this->model->getProductos();
    $this->view->ganadores($productos);

  }

}





?>
