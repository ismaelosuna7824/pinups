<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['uploaded_file']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['uploaded_file']['name']);
  
      if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datosss = "'$newPath'";

        $titulo = $_POST['titulo'];
        $des = $_POST['desc'];
      
        $datos = " '$titulo', '$des', '$newPath' ";
            echo $datos;
        $r = $user->guardar("imgeventos", $datos);

       // $r = $user->guardar("tiendaimg", $datos );
        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r[0] == true){
            //header("Location: ../dashboard/index.php");
            echo "<script>location='../dashboard/index.php'</script>";
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>