<?php
class ApptivaDB {

    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "pinups";
    
    public $conexion;

    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db )
        or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
    ////Funciones////
    public function guardar($tabla, $datos){
        $resultado = $this->conexion->query("INSERT INTO $tabla VALUES (null, $datos)") or die
        ($this->conexion->error);
        if($resultado){
            $maxId = $this->conexion->insert_id;
            return array($resultado, $maxId);
        }else{
            return false;
        }
    }
    public function cargarDatos($consulta){
        $resultado = $this->conexion->query("$consulta") or die
        ($this->conexion->error);
        if($resultado){
            $select = array();
            while( $row = mysqli_fetch_assoc($resultado) ) {
                $select[] = $row;
            }
            return $select;
        }else{
            return false;
        }
        
    }
    public function maxProducto(){
        $resultado = $this->conexion->query("SELECT max(idProductos) as id FROM productos") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["id"];  
            }
            return $dto;
        }else{
            return false;
        }
    }
    public function maxCompra(){
        $resultado = $this->conexion->query("SELECT max(idCompras) as id FROM compras") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["id"];  
            }
            return $dto;
        }else{
            return false;
        }
    }
    public function maxCotizacion(){
        $resultado = $this->conexion->query("SELECT max(idCotizacion) as id FROM cotizacion") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["id"];  
            }
            return $dto;
        }else{
            return false;
        }
    }
 /*   public function existeProducto($codigo){
        $resultado = $this->conexion->query("SELECT productos.idProductos, inventario.i_stock from inventario
        inner join productos on inventario.id_producto = productos.idProductos
        where productos.p_estatus = 0 and productos.p_codigoBarra = '$codigo'") or die
        ($this->conexion->error);
        if($resultado){
            $select = array();
            while( $row = mysqli_fetch_assoc($resultado) ) {
                $select[] = $row;
            }
            return $select;
        }else{
            return false;
        }
    }*/
    public function  existeProductoI($codigo){
        $resultado = $this->conexion->query("SELECT idProductos from inventario
        inner join productos on inventario.id_producto = productos.idProductos
        where productos.p_estatus = 0 and productos.p_codigoBarra = '$codigo'") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["idProductos"];  
            }
            return $dto;
        }else{
            return false;
        }
    }
    public function  existeProductoS($codigo){
        $resultado = $this->conexion->query("SELECT  i_stock from inventario
        inner join productos on inventario.id_producto = productos.idProductos
        where productos.p_estatus = 0 and productos.p_codigoBarra = '$codigo'") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["i_stock"];  
            }
            return $dto;
        }else{
            return false;
        }
    }
    public function  stockM($id){
        $resultado = $this->conexion->query("SELECT i_stock FROM inventario WHERE idInventario  = '$id'") or die
        ($this->conexion->error);
        if($resultado){
            $dto;
            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $dto = $fila["i_stock"];  
            }
            return $dto;
        }else{
            return false;
        }
    }

    public function eliminar($tabla, $campo, $id, $nombreId){
        $resultado = $this->conexion->query("UPDATE $tabla set $campo = '1' WHERE $nombreId = $id") or die
        ($this->conexion->error);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarPro($id, $table, $campo){
        $resultado = $this->conexion->query("DELETE FROM $table WHERE $campo  = $id") or die
        ($this->conexion->error);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function actualizar($consulta){
        $resultado = $this->conexion->query("$consulta") or die
        ($this->conexion->error);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function notificacion(){
        $resultado = $this->conexion->query("SELECT productos.p_codigoBarra, productos.p_descripcion, inventario.i_stockminimo, inventario.i_stock FROM inventario INNER JOIN productos on id_producto = productos.idProductos WHERE i_stock < i_stockminimo") or die
        ($this->conexion->error);
        if($resultado){
            $select = array();
            while( $row = mysqli_fetch_assoc($resultado) ) {
                $select[] = $row;
            }
            return $select;
        }else{
            return false;
        }
        
    }
    public function login($user, $pass){
        $resultado = $this->conexion->query("SELECT u_tipo, u_usuario, u_contraseña,ciudad, CONCAT(empleados.e_nombre, ' ', empleados.e_paterno, ' ', empleados.e_materno) as nombre FROM usuarios INNER JOIN empleados on id_empleado = empleados.idEmpleados WHERE u_usuario = '$user'") or die
        ($this->conexion->error);
        if($resultado->num_rows == null){
            return array("false");
        }
        if($resultado){
            $use;
            $pas;
            $tipo;
            $nombre;
            $ciudad;

            //return $resultado->fetch_all(MYSQLI_ASSOC);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $use = $fila["u_usuario"];
                $pas = $fila["u_contraseña"]; 
                $tipo = $fila["u_tipo"];  
                $nombre = $fila["nombre"];
                $ciudad =  $fila["ciudad"];
            }
            if($use == $user && $pas == $pass){
                return array($tipo, $nombre,$ciudad);
            }
            else{
                return array("false");
            }
            
        }else{
            return array("false");
        }
    }
    

}
?>