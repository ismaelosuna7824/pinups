<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['nfileImg']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['nfileImg']['name']);
      $idimg = $_POST['img1'];
      $url = $_POST['url'];
      
      if(move_uploaded_file($_FILES['nfileImg']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datos = "'$newPath'";
        if($idimg == 1){
          $r = $user->actualizar("UPDATE i_secciontres set image = $datos WHERE id = $idimg");
        }else{
          $r = $user->actualizar("UPDATE i_secciontres set image = $datos, url = '{$url}' WHERE id = $idimg");
        }
        
        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r == true){
            //header("Location: ../dashboard/inicioseccion3.php");
            echo "<script>location='../dashboard/inicioseccion3.php'</script>";
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>