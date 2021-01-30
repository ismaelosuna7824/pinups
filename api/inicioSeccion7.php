<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    $accion = "mostrar";
    if(isset($_POST['accion']))
        $accion=$_POST['accion'];
    switch ($accion) {
      case 'Guardar':
        $id = $_POST['id'];
        $texto = $_POST['texto'];
        $nombre = $_POST['nombre'];
        $url = $_POST['url'];


        $r = $user->actualizar("UPDATE i_seccionsiete set texto = '$texto', nombre = '$nombre', url = '$url' WHERE id = $id");
        echo "Actualizado correctamente";
        if($r == true){
            header("Location: ../dashboard/inicioseccion7.php");
        }else{
          echo "Ocurrio un error al actualizar los datos";
        }  
      break;
      case 'Eliminar':
        $id = $_POST['id'];
        $u = $user->eliminarPro($id,"i_seccionsiete","id"); 
        if($u):
            $res['datos'] = $u;
            $res['mensaje'] = "exito";   
            header("Location: ../dashboard/inicioseccion7.php");
        else:
            $res['mensaje'] = "Aun no hay registros";
            $res['error'] = true;
        endif;
      break;
      case 'Insertar':

        $datos = "'dashboard/uploads/trip-estrada.jpg', 'ingrese aqui el Texto', '<strong>NOMBRE </strong> en Tripadvisor', 'Ingrese aqui el URL'";
         
        $u = $user->guardar("i_seccionsiete", $datos);

        if($u[0] == true):
          $res['mensaje'] = $u[0];
          header("Location: ../dashboard/inicioseccion7.php");   
      
        else:
        $res['mensaje'] = "error";
        $res['error'] = true; 
        endif;
      break;
      break;
    }
?>