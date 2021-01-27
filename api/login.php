<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'login':
        $userr = $data->user;
        $pass = sha1($data->pass);

        $u = $user->login($userr, $pass); 
        //$res['datos'] = $u;
        
        if($u[0] == 'false'):
            $res['datos'] = false;
            $res['mensaje'] = "exito";   
        else:
            $res['mensaje'] = $u;
            $res['error'] = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $userr;
            $_SESSION['tipo'] = $u[0];
            $_SESSION['nombre'] = $u[1];
            $_SESSION['ciudad'] = $u[2];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (180 * 60);
           // header('Location: ../administrador/index.php');
        endif; 
        break;
        case 'loginS':
        $userr = $data->user;
        $pass = sha1($data->pass);

        $u = $user->login($userr, $pass); 
        //$res['datos'] = $u;
        
        if($u[0] == 'false'):
            $res['datos'] = false;
            $res['mensaje'] = "exito";   
        else:
            $res['mensaje'] = $u;
            $res['error'] = true;
           
           // header('Location: ../administrador/index.php');
        endif; 
        break;

        }

    echo json_encode($res);
    die();
?>