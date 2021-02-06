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
            $u = $user->cargarDatos("SELECT * FROM c_seccionuno WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciondos':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_secciondos WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciondosimg':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_secciondosimg"); 
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
            $u = $user->cargarDatos("SELECT * FROM c_secciontres"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'seccioncuatro':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_seccioncuatro"); 
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
            $u = $user->cargarDatos("SELECT * FROM c_seccionseis"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'bannerimg':
            // $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_banner"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
            //////////////////////dashboard///////////////////////////////////
        case 'dseccionuno':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_seccionuno"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updateuno':
            //$idioma = $data->ide;
            $ides = $data->ides;
            $iden = $data->iden;
            $textoes = $data->textoes;
            $textoen = $data->textoen;
            $agradecimientoes = $data->agradecimientoes;
            $agradecimientoen = $data->agradecimientoen;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE c_seccionuno set texto = '{$textoes}', agradecimiento = '${agradecimientoes}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE c_seccionuno set texto = '{$textoen}', agradecimiento = '${agradecimientoen}' WHERE id = $iden");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dsecciondosImg':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_secciondosimg"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dsecciondos':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_secciondos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatedos':
            //$idioma = $data->ide;
            $ides = $data->id;
            $titulo = $data->titulo;
            $textoes = $data->texto;
            
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE c_secciondos set titulo = '{$titulo}' ,texto = '{$textoes}' WHERE id = $ides");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dsecciontres':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_secciontres"); 
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
            $r = $user->eliminarPro($id, "c_secciontres", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'dseccioncuatro':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM c_seccioncuatro"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dseccioncuatroEliminarImagen':
            //$idioma = $data->ide;
            $id = $data->ide;
            $idpat = $data->path;

            $newPathUnlik = substr($idpat,18);
            unlink("../dashboard/uploads/{$newPathUnlik}");
            $r = $user->eliminarPro($id, "c_seccioncuatro", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'updatebanner':
            //$idioma = $data->ide;
            $url = $data->url;
            $u = $user->actualizar("UPDATE c_banner set url = '{$url}' WHERE id = 1");
            $u = $user->actualizar("UPDATE c_banner set url = '{$url}' WHERE id = 2");
        
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