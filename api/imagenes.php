<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'imgEventos':
            $u = $user->cargarDatos("select * from bannerimg"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'imgHeader':
            $u = $user->cargarDatos("select * from imgheader"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'eliminarHeader':
            $id = $data->ide;  
            $r = $user->eliminarPro($id, "imgheader", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'eliminar':
            $id = $data->ide;  
            $r = $user->eliminarPro($id, "bannerimg", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'editarUrl':
            $id = $data->id;
            $url = $data->url;

         $datos = "UPDATE imgheader SET url = '$url' WHERE id = $id;";
         
         $r = $user->actualizar($datos);
     
         if($r == true):
             $res['mensaje'] = $r;   
         
         else:
          $res['mensaje'] = "error";
          $res['error'] = true; 
         endif;
        break;
        
        
        
        
        
        
        }

    echo json_encode($res);
    die();
?>