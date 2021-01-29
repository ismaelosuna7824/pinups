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
            $u = $user->cargarDatos("SELECT * FROM f_seccionuno WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciodostitulo':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_secciondostitulos WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciodoscol':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_secciondoscol WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'secciontrestitulo':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_secciontrestitulo WHERE idioma = '$idioma'"); 
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
            $u = $user->cargarDatos("SELECT * FROM f_seccioncuatro WHERE idioma = '$idioma'"); 
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
            $u = $user->cargarDatos("SELECT * FROM f_seccioncinco WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        //////////////////////////////Franquicias dashboard /////////////////////////////////////////
        case 'dseccionuno':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_seccionuno"); 
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
            $tituloes = $data->tituloes;
            $textoes  = $data->textoes;
            $botones  = $data->botones;
            $ides = $data->ides;
            $tituloen = $data->tituloen;
            $textoen  = $data->textoen;
            $botonen  = $data->botonen;
            $iden = $data->iden;
            $url = $data->url;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_seccionuno set titulo = '$tituloes', texto = '$textoes', boton = '$botones', url = '$url' WHERE id = $ides");
            $u = $user->actualizar("UPDATE f_seccionuno set titulo = '$tituloen', texto = '$textoen', boton = '$botonen', url = '$url' WHERE id = $iden");
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
            $u = $user->cargarDatos("SELECT * FROM f_secciondostitulos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatedostitulo':
            //$idioma = $data->ide;
            $tituloes = $data->tituloes;
            $textoes  = $data->textoes;
            $ides = $data->ides;
            $tituloen = $data->tituloen;
            $textoen  = $data->textoen;
            $iden = $data->iden;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_secciondostitulos set titulo = '{$tituloes}', texto = '{$textoes}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE f_secciondostitulos set titulo = '{$tituloen}', texto = '{$textoen}' WHERE id = $iden");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dsecciondoscol':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_secciondoscol"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatedoscol':
            //$idioma = $data->ide;

            $titulo1es  =  $data->titulo1es; 
            $titulo2es  =  $data->titulo2es; 
            $titulo3es  =  $data->titulo3es; 
            $texto1es   =  $data->texto1es; 
            $texto2es   =  $data->texto2es; 
            $texto3es   =  $data->texto3es; 
            $idcol1es   =  $data->idcol1es; 
            $idcol2es   =  $data->idcol2es; 
            $idcol3es   =  $data->idcol3es; 

            $titulo1en  =  $data->titulo1en; 
            $titulo2en  =  $data->titulo2en; 
            $titulo3en  =  $data->titulo3en; 
            $texto1en   =  $data->texto1en; 
            $texto2en   =  $data->texto2en; 
            $texto3en   =  $data->texto3en; 
            $idcol1en   =  $data->idcol1en; 
            $idcol2en   =  $data->idcol2en; 
            $idcol3en   =  $data->idcol3en; 
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo1es}', texto = '{$texto1es}' WHERE id = $idcol1es");
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo2es}', texto = '{$texto2es}' WHERE id = $idcol2es");
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo3es}', texto = '{$texto3es}' WHERE id = $idcol3es");
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo1en}', texto = '{$texto1en}' WHERE id = $idcol1en");
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo2en}', texto = '{$texto2en}' WHERE id = $idcol2en");
            $u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$titulo3en}', texto = '{$texto3en}' WHERE id = $idcol3en");
            //$u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$tituloen}', texto = '{$textoen}' WHERE id = $iden");
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
            $u = $user->cargarDatos("SELECT * FROM f_secciontrestitulo"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatetres':
            //$idioma = $data->ide;

            $ides = $data->ides;
            $iden = $data->iden;

            $nombrees = $data->nombrees;
            $apellidoes = $data->apellidoes;
            $correoes = $data->correoes;
            $telefonoes = $data->telefonoes;
            $ciudades = $data->ciudades;
            $estadoes = $data->estadoes;
            $mensajees = $data->mensajees;
            $botonenes = $data->botonenes;
            $tituloes = $data->tituloes;
            $textoes  = $data->textoes;
            $phonees = $data->phonees;

            $nombreen = $data->nombreen;
            $apellidoen = $data->apellidoen;
            $correoen = $data->correoen;
            $telefonoen = $data->telefonoen;
            $ciudaden = $data->ciudaden;
            $estadoen = $data->estadoen;
            $mensajeen = $data->mensajeen;
            $botonen = $data->botonen;
            $tituloen = $data->tituloen;
            $textoen  = $data->textoen;
            $phoneen = $data->phoneen;

            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_secciontrestitulo set titulo = '{$tituloes}', texto = '{$textoes}', telefono = '${phonees}', name = '${nombrees}', lastname = '${apellidoes}', email = '${correoes}', phone = '${telefonoes}', city = '${ciudades}', state = '${estadoes}', message = '${mensajees}', boton = '${botonenes}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE f_secciontrestitulo set titulo = '{$tituloen}', texto = '{$textoen}', telefono = '${phoneen}', name = '${nombreen}', lastname = '${apellidoen}', email = '${correoen}', phone = '${telefonoen}', city = '${ciudaden}', state = '${estadoen}', message = '${mensajeen}', boton = '${botonen}' WHERE id = $iden");
            //$u = $user->actualizar("UPDATE f_secciondoscol set titulo = '{$tituloen}', texto = '{$textoen}' WHERE id = $iden");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dseccioncuatro':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_seccioncuatro"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatecuatro':
            //$idioma = $data->ide;
            $textoes  = $data->textoes;
            $ides = $data->ides;
            $textoen  = $data->textoen;
            $iden = $data->iden;
            $url = $data->url;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_seccioncuatro set titulo = '{$textoes}', url = '{$url}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE f_seccioncuatro set titulo = '{$textoen}', url = '{$url}' WHERE id = $iden");
            //echo $u;
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'dseccioncinco':
            //$idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM f_seccioncinco"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'updatecinco':
            //$idioma = $data->ide;
            $ides = $data->ides;
            $iden = $data->iden;
            $tituloes = $data->tituloes;
            $tituloen = $data->tituloen;
            $textoes = $data->textoes;
            $textoen = $data->textoen;
            $agradecimientoes = $data->agradecimientoes;
            $agradecimientoen = $data->agradecimientoen;
            //$datos = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";   
            $u = $user->actualizar("UPDATE f_seccioncinco set titulo = '{$tituloes}', texto = '{$textoes}', agradecimiento = '${agradecimientoes}' WHERE id = $ides");
            $u = $user->actualizar("UPDATE f_seccioncinco set titulo = '{$tituloen}', texto = '{$textoen}', agradecimiento = '${agradecimientoen}' WHERE id = $iden");
            //echo $u;
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