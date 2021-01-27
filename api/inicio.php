<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'titulos':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM titulos WHERE idioma = '$idioma'"); 
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
        case 'secciondos':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM i_secciondos WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciontres':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM i_secciontres"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'seccioncinco':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM i_seccioncinco  WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'seccionseis':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM i_seccionseis"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'seccionsiete':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM  i_seccionsiete"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        
        
        
        
        
        }

    echo json_encode($res);
    die();
?>