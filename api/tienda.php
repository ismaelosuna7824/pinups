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
            $u = $user->cargarDatos("SELECT * FROM tiendatitu WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciondos':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM tiendaimg "); 
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
            $u = $user->cargarDatos("SELECT * FROM tiendatitu"); 
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
            $textoes = $data->tituloes;
            $textoen = $data->tituloen;
            $agradecimientoes = $data->textoes;
            $agradecimientoen = $data->textoen;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE tiendatitu set titulo = '{$textoes}', texto = '${agradecimientoes}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE tiendatitu set titulo = '{$textoen}', texto = '${agradecimientoen}' WHERE id = $iden");
            //echo $u;
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
            $r = $user->eliminarPro($id, "tiendaimg", "id");
        
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