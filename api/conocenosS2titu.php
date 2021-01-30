<?php 
    require "../metodos/conexion.php";
    $user = new ApptivaDB();
    if(!empty($_FILES['nfileImg']))
    {
      $path = "../dashboard/uploads/";
      $path = $path . basename( $_FILES['nfileImg']['name']);
      $idimg = $_POST['img1'];
      //$idpat = $_POST['img1p'];
  
      if(move_uploaded_file($_FILES['nfileImg']['tmp_name'], $path)) {
        //$name = "".$basename( $_FILES['uploaded_file']['name'])."";
        $newPath = substr($path,3);
        $datos = "'$newPath'";
        //$mewID =  $idimg + 1;
        $r = $user->actualizar("UPDATE c_secciondosimg set img1 = $datos WHERE id = $idimg");
        //$r = $user->actualizar("UPDATE c_seccionuno set img2 = $datos WHERE id = $mewID");
        echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded";
        if($r == true){
            //  $newPathUnlik = substr($idpat,18);
            //  unlink("../dashboard/uploads/{$newPathUnlik}");
            //echo $newPathUnlik;
            header("Location: ../dashboard/conocenossecciondos.php");
        }
      } else{
          echo "There was an error uploading the file, please try again!";
      }
    }
?>