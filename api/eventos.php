<?php 
    require "../metodos/conexion.php";
    $data = json_decode(file_get_contents("php://input"));
    $user = new ApptivaDB();
    $accion = "mostrar";
    $res = array("error"=>false);
    if(isset($_GET['accion']))
        $accion=$_GET['accion'];
    
        switch ($accion) {
        case 'mostrarEventos':
            $u = $user->cargarDatos("select * from eventos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'imgEventos':
            $u = $user->cargarDatos("select * from imgeventos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'calendario':
            $u = $user->cargarDatos("select * from eventos"); 
            if($u):
                $res['datos'] = $u;
                $res['mensaje'] = "exito";   
            else:
                $res['mensaje'] = "Aun no hay registros";
                $res['error'] = true;
            endif;
        break;
        case 'insertar':
               $titulo = $data->titulo;
               $des = $data->desc;
               $imgUrl = $data->img;
            $datos = "'$titulo', '$des', '$imgUrl'";
            
            $r = $user->guardar("imgeventos", $datos);
        
            if($r[0] == true):
                $res['mensaje'] = $r[0];   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'eliminar':
            $id = $data->ide;  
            $r = $user->eliminarPro($id, "imgeventos", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'eliminarCalendario':
            $id = $data->ide;  
            $r = $user->eliminarPro($id, "eventos", "id");
        
            if($r == true):
                $res['mensaje'] = $r;   
            
            else:
             $res['mensaje'] = "error";
             $res['error'] = true; 
            endif;
        break;
        case 'insertarCalendario':
            $horario = $data->horario;
            $lunes = $data->lunes;
            $martes = $data->martes;
            $miercoles = $data->miercoles;
            $jueves = $data->jueves;
            $viernes = $data->viernes;
            $sabado = $data->sabado;
            $domingo = $data->domingo;

         $datos = "'$horario', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$sabado', '$domingo'";
         
         $r = $user->guardar("eventos", $datos);
     
         if($r[0] == true):
             $res['mensaje'] = $r[0];   
         
         else:
          $res['mensaje'] = "error";
          $res['error'] = true; 
         endif;
        break;
        case 'actualizar':
            $id = $data->id;
            $horario = $data->horario;
            $lunes = $data->lunes;
            $martes = $data->martes;
            $miercoles = $data->miercoles;
            $jueves = $data->jueves;
            $viernes = $data->viernes;
            $sabado = $data->sabado;
            $domingo = $data->domingo;

         $datos = "UPDATE eventos SET horarios = '$horario',  lunes = '$lunes', martes = '$martes', miercoles = '$miercoles', jueves = '$jueves', viernes = '$viernes', sabado = '$sabado', domingo = '$domingo' WHERE id = $id;";
         
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