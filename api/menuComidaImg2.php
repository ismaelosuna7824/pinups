<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['nfileImg']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['nfileImg']['name']);
      $idimg = $_POST['img1'];
      $campo = $_POST['campo'];
  
      if(move_uploaded_file($_FILES['nfileImg']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datos = "'$newPath'";
        $r = $user->actualizar("UPDATE menutitulos set $campo = $datos WHERE id = 1");
        $r = $user->actualizar("UPDATE menutitulos set $campo = $datos WHERE id = 2");
        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r == true){
            echo "<script>location='../dashboard/menuComida.php'</script>";
            //header("Location: ../dashboard/inicioseccion7.php");
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>