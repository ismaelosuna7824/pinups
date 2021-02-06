<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'menu':
            $idioma = $data->ide;
            $u = $user->cargarDatos("SELECT * FROM menu WHERE idioma = '$idioma'"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'actualizar':
            //$idioma = $data->ide;
            $home = $data->home;
            $menu= $data->menu;
            $about = $data->about;
            $music = $data->music;
            $store = $data->store;
            $pinups= $data->pinups;
            $privacy = $data->privacy;

            $homeE = $data->homeE;
            $menuE= $data->menuE;
            $aboutE = $data->aboutE;
            $musicE = $data->musicE;
            $storeE = $data->storeE;
            $pinupsE = $data->pinupsE;
            $privacyE = $data->privacyE;
            
            $telefono = $data->telefono;
            
            $footeres = $data->footerEs;
            $footeren = $data->footerEn;

            $u = $user->actualizar("UPDATE menu SET nombre = '$home' WHERE id = 1");
            $u = $user->actualizar("UPDATE menu SET nombre = '$homeE' WHERE id = 2");

            $u = $user->actualizar("UPDATE menu SET nombre = '$menu' WHERE id = 3");
            $u = $user->actualizar("UPDATE menu SET nombre = '$menuE' WHERE id = 4");

            $u = $user->actualizar("UPDATE menu SET nombre = '$about' WHERE id = 5");
            $u = $user->actualizar("UPDATE menu SET nombre = '$aboutE' WHERE id = 6");

            $u = $user->actualizar("UPDATE menu SET nombre = '$music' WHERE id = 7");


            $u = $user->actualizar("UPDATE menu SET nombre = '$musicE' WHERE id = 8");

            $u = $user->actualizar("UPDATE menu SET nombre = '$store' WHERE id = 9");
            $u = $user->actualizar("UPDATE menu SET nombre = '$storeE' WHERE id = 10");

            $u = $user->actualizar("UPDATE menu SET nombre = '$pinups' WHERE id = 11");
            $u = $user->actualizar("UPDATE menu SET nombre = '$pinupsE' WHERE id = 12");

            $u = $user->actualizar("UPDATE menu SET nombre = '$privacy' WHERE id = 13");
            $u = $user->actualizar("UPDATE menu SET nombre = '$privacyE' WHERE id = 14");

            $u = $user->actualizar("UPDATE menu SET nombre = '$telefono' WHERE id = 15");
            $u = $user->actualizar("UPDATE menu SET nombre = '$telefono' WHERE id = 16");

            $u = $user->actualizar("UPDATE menu SET nombre = '$footeres' WHERE id = 17");
            $u = $user->actualizar("UPDATE menu SET nombre = '$footeren' WHERE id = 18");
            
            
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'menulogo':
            $u = $user->cargarDatos("SELECT * FROM menulogo"); 
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