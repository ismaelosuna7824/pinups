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

            $tituloE = $data->tituloE;
            $descripcionE = $data->descripcionE;

            $titulo2E = $data->titulo2E;
            $descripcion2E = $data->descripcion2E;

            $titulo3E = $data->titulo3E;
            $descripcion3E = $data->descripcion3E;

            $titulo4E = $data->titulo4E;
            $descripcion4E = $data->descripcion4E;

         //$datos = "UPDATE i_secciondos SET titulo = (CASE WHEN  id = $id THEN '$titulo'  WHEN  id = $id2 THEN '$titulo2'  WHEN  id = $id3 THEN '$titulo3'  WHEN  id = $id4 THEN '$titulo4' END),  subtitulo = (CASE WHEN id = $id THEN '$descripcion' WHEN id = $id2 THEN '$descripcion2'  WHEN id = $id3 THEN '$descripcion3' WHEN id = $id4 THEN '$descripcion4' END)";  
         //$r = $user->actualizar($datos);
     
         //$u = $user->actualizar("UPDATE i_secciondos SET titulo = (CASE WHEN  id = 5 THEN '$tituloE'  WHEN  id = 6 THEN '$titulo2E'  WHEN  id = 7 THEN '$titulo3E'  WHEN  id = 8 THEN '$titulo4E' END),  subtitulo = (CASE WHEN id = 5 THEN '$descripcionE' WHEN id = 6 THEN '$descripcion2E'  WHEN id = 7 THEN '$descripcion3E' WHEN id = 8 THEN '$descripcion4E' END)");

         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo',subtitulo ='$descripcion' WHERE id = 1");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo2',subtitulo ='$descripcion2' WHERE id = 2");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo3',subtitulo ='$descripcion3' WHERE id = 3");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo4',subtitulo ='$descripcion4' WHERE id = 4");

         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$tituloE',subtitulo ='$descripcionE' WHERE id = 5");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo2E',subtitulo ='$descripcion2E' WHERE id = 6");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo3E',subtitulo ='$descripcion3E' WHERE id = 7");
         $r = $user->actualizar("UPDATE i_secciondos SET titulo = '$titulo4E',subtitulo ='$descripcion4E' WHERE id = 8");

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
            $tituloE = $data->tituloE;

         $datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";  
         $r = $user->actualizar($datos);
         $r = $user->actualizar("UPDATE titulos SET titulo = '$tituloE' WHERE id = 2");
     
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
        case 'seccioncincoTodos':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM i_seccioncinco "); 
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
        case 'seccioncincoActualizarTextos':
            //$idioma = $data->ide;

            $titulo1 = $data->titulo1;
            $titulo2 = $data->titulo2;
            $titulo3 = $data->titulo3;

            $texto11 = $data->texto11;
            $texto12 = $data->texto12;
            $texto13 = $data->texto13;

            $texto21 = $data->texto21;
            $texto22 = $data->texto22;
            $texto23 = $data->texto23;
            //ingles
            $titulo1E = $data->titulo1E;
            $titulo2E = $data->titulo2E;
            $titulo3E = $data->titulo3E;

            $texto11E = $data->texto11E;
            $texto12E = $data->texto12E;
            $texto13E = $data->texto13E;

            $texto21E = $data->texto21E;
            $texto22E = $data->texto22E;
            $texto23E = $data->texto23E;
            $URL1 = $data->URL1;
            

            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo1' , texto1 = '$texto11' , texto2 = '$texto21', url ='$URL1'  WHERE id = 1");   
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo2' , texto1 = '$texto12' , texto2 = '$texto22'  WHERE id = 2"); 
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo3' , texto1 = '$texto13' , texto2 = '$texto23'  WHERE id = 3"); 
            
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo1E' , texto1 = '$texto11E' , texto2 = '$texto21E'  WHERE id = 4");   
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo2E' , texto1 = '$texto12E' , texto2 = '$texto22E'  WHERE id = 5"); 
            $u = $user->actualizar("UPDATE i_seccioncinco SET titulo = '$titulo3E' , texto1 = '$texto13E' , texto2 = '$texto23E'  WHERE id = 6"); 

            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'titulosiete':
            $u = $user->cargarDatos("SELECT * FROM ( SELECT * FROM titulos WHERE id = 5 UNION ALL SELECT * FROM titulos WHERE id = 6 UNION ALL SELECT * FROM titulos WHERE id = 9 ) titulos "); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'editarsiete':
            $titulo1 = $data->tituloes;
            $titulo2 = $data->tituloen;
            $u = $user->actualizar("UPDATE titulos SET titulo = '$titulo1'  WHERE id = 5");   
            $u = $user->actualizar("UPDATE titulos SET titulo = '$titulo2'  WHERE id = 6");
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