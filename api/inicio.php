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
        case 'secciondosActualizar':
            $id = $data->id;
            $titulo = $data->titulo;
            $descripcion = $data->descripcion;

            $id2 = $data->id2;
            $titulo2 = $data->titulo2;
            $descripcion2 = $data->descripcion2;

            $id3 = $data->id3;
            $titulo3 = $data->titulo3;
            $descripcion3 = $data->descripcion3;

            $id4 = $data->id4;
            $titulo4 = $data->titulo4;
            $descripcion4 = $data->descripcion4;

         $datos = "UPDATE i_secciondos SET titulo = (CASE WHEN  id = $id THEN '$titulo'  WHEN  id = $id2 THEN '$titulo2'  WHEN  id = $id3 THEN '$titulo3'  WHEN  id = $id4 THEN '$titulo4' END),  subtitulo = (CASE WHEN id = $id THEN '$descripcion' WHEN id = $id2 THEN '$descripcion2'  WHEN id = $id3 THEN '$descripcion3' WHEN id = $id4 THEN '$descripcion4' END)";  
         $r = $user->actualizar($datos);
     
         if($r == true):
             $res['mensaje'] = $r;   
         
         else:
          $res['mensaje'] = "error";
          $res['error'] = true; 
         endif;
        break;
        case 'secciondosActualizarTitulo':
            $id = $data->id;
            $titulo = $data->titulo;

         $datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";  
         $r = $user->actualizar($datos);
     
         if($r == true):
             $res['mensaje'] = $r;   
         
         else:
          $res['mensaje'] = "error";
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
        case 'secciontresActualizarVideo':
            $id = $data->id;
            $url = $data->url;

         $datos = "UPDATE i_secciontres SET url = '$url' WHERE id = $id";  
         $r = $user->actualizar($datos);
     
         if($r == true):
             $res['mensaje'] = $r;   
         
         else:
          $res['mensaje'] = "error";
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
        case 'seccioncincoActualizarTitulo':
            //$idioma = $data->ide;
            $ttitulo1 = $data->ttitulo1;
            $ttitulo1E= $data->ttitulo1E;
            $descripcion = $data->descripcion;
            $descripcionE = $data->descripcionE;
           
            $u = $user->actualizar("UPDATE titulos SET titulo = '$ttitulo1' WHERE id = 3");
            $u = $user->actualizar("UPDATE titulos SET titulo = '$ttitulo1E' WHERE id = 4");
            $u = $user->actualizar("UPDATE titulos SET titulo = '$descripcion' WHERE id = 7");
            $u = $user->actualizar("UPDATE titulos SET titulo = '$descripcionE' WHERE id = 8");
            
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