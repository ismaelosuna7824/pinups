<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['nfileImg']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['nfileImg']['name']);
      $idimg = $_POST['img1'];
  
      if(move_uploaded_file($_FILES['nfileImg']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datos = "'$newPath'";
        $mewID =  $idimg + 4;
        $r = $user->actualizar("UPDATE i_secciondos set img = $datos WHERE id = $idimg"); 
        $r = $user->actualizar("UPDATE i_secciondos set img = $datos WHERE id = $mewID"); 

        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r == true){
            //header("Location: ../dashboard/inicioseccion2.php");
            echo "<script>location='../dashboard/inicioseccion2.php'</script>";
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>