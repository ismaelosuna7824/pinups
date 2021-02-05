<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['nfileImg']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['nfileImg']['name']);
      $idimg = $_POST['img1'];
      $tabla = $_POST['tabla'];
      $campo = $_POST['campo'];
      $pagina = $_POST['pagina'];
      if(move_uploaded_file($_FILES['nfileImg']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datos = "'$newPath'";
        $r = $user->actualizar("UPDATE $tabla set $campo = $datos WHERE id = $idimg");
        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r == true){
            //header("Location: ../dashboard/inicioseccion7.php");
            echo "<script>location='../dashboard/{$pagina}.php'</script>";
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>