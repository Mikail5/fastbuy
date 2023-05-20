<?php
  class indexController{
    public $header = "";

    public function __construct(){
      if(isset($_SESSION['user'])){
        switch($_SESSION['user']->idRol){
          case '1':
            $this->header = "vistas/admin/header.php";
            break;
          case '2':
            $this->header = "vistas/vende/header.php";
            break;
        }
      }
      else{
        $this->header = "vistas/layouts/header.php";
      }
    }

    public function index(){
      $categoria = (isset($_GET['cate'])) ? $_GET['cate'] : '1';
      $response = json_decode(file_get_contents("http://localhost/fast/api/?service=productos&method=index&cate={$categoria}"), true);

      $titulo = "";
      if($response['statuscode'] == 200){
        require_once $this->header;
        require_once "vistas/index/index.php";
        require_once "vistas/layouts/footer.php";
      }
    }

    public function verProd(){
      if(isset($_GET['idp'])){
        $response = json_decode(file_get_contents("http://localhost/fast/api/?service=productos&method=buscarProducto&idProducto={$_GET['idp']}"), true);

        if($response['statuscode'] == 200){
          $datosProducto = $response['producto'];
          require_once $this->header;
          require_once "vistas/index/verProducto.php";
          require_once "vistas/layouts/footer.php";
        }
      }
      else{
        echo('No se ha seleccionado ningún producto');
      }
    }

    public function consultarProducto(){
      if(isset($_POST['nomart'])){
        $response = json_decode(file_get_contents("http://localhost/fast/api/?service=productos&method=buscarProductoPorDato&dato={$_POST['nomart']}"), true);

        $titulo = "Resultados de búsqueda";
        if($response['statuscode'] == 200){
          require_once $this->header;
          require_once "vistas/index/index.php";
          require_once "vistas/layouts/footer.php";
        }
      }
    }
  }
?>
