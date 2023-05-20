<?php
  class seguridadController extends Seguridad
  {
    public function entrar(){
      $resul=parent::validaEntrada($_POST['nombre']);

      if (!is_object($resul)) {
        die('Ingreso de manera incorrecta');
      }
      if (password_verify($_POST['contrasen'], $resul->passwEmp)) {
        $_SESSION['user']=$resul;
        if ($resul->idRol == 1) {
          header("Location: ?controller=admin");
        }
        elseif ($resul->idRol == 2) {
          echo "Acceso correcto de vende";
          header("Location: ?controller=vende");
        }
      }
      else{
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        header("Refresh: 0; url=?controller=index");
      }
    }

    public function salir(){
      unset($_SESSION['user']);
      session_destroy();
      header("Location: ?controller=index");
    }
  }
?>
