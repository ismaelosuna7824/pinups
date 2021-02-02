<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'seccionuno':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM menutitulos WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dseccionuno':
        
            $u = $user->cargarDatos("SELECT * FROM menutitulos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'cargaimg':
        
            $u = $user->cargarDatos("SELECT * FROM menuimagenes"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
       
       
       
            //////////////////////dashboard///////////////////////////////////

        case 'updateuno':
            //$idioma = $data->ide;
            $texto1es = $data->texto1es;
            $texto1en = $data->texto1en;
            $telefono = $data->telefono;
            $texto2es = $data->texto2es;
            $texto2en = $data->texto2en;
            $texto3es = $data->texto3es;
            $texto3en = $data->texto3en;
            $url1 = $data->url1;
            $url2 = $data->url2;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE menutitulos set texto = '{$texto1es}', telefono = '${telefono}', texto2 = '{$texto2es}', texto3 = '{$texto3es}', url1 = '{$url1}' WHERE id = 1");
            $u = $user->actualizar("UPDATE menutitulos set texto = '{$texto1en}', telefono = '${telefono}', texto2 = '{$texto2en}', texto3 = '{$texto3en}', url2 = '{$url2}' WHERE id = 2");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        
        case 'dsecciontresEliminarImagen':
            //$idioma = $data->ide;
            $id = $data->ide;
            $idpat = $data->path;

            $newPathUnlik = substr($idpat,18);
            unlink("../dashboard/uploads/{$newPathUnlik}");
            $r = $user->eliminarPro($id, "menuimagenes", "id");
        
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