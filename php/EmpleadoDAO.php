<?php
require_once '../php/ConexionBD.php';
   require_once '../php/EmpleadoBean.php';
class EmpleadoDAO {  
   public function InsertarEmpleado(EmpleadoBean $objEmpleadoBean){
       $estado=0;
       try {
           $sql= "insert into empleado values('$objEmpleadoBean->CODEMPLE','$objEmpleadoBean->NOMBEMPLE','$objEmpleadoBean->APELLIEMPLE');";
           $conexion= new ConexionBD();
           $cn=$conexion->getConexionBD();
           $estado=mysqli_query($cn,$sql);
           mysqli_close($cn);
       } catch (Exception $ex) {
           $estado=0;
       }
return $estado;      
   }
   public function ListarEmpleados(){
       try {
           $sql ="select * from empleado ;";
           $conexion= new ConexionBD();
           $cn=$conexion->getConexionBD();
           $rs= mysqli_query($cn,$sql);
           $lista=array();
           while($fila= mysqli_fetch_assoc($rs)){
               $lista[]=$fila;
           }
           mysqli_close($cn);
       } catch (Exception $ex) {
           
       }
       return $lista;
      }
      public function EliminarEmpleados(EmpleadoBean $objEmpleadoBean){
          $estado=0;
       try {
           $sql= "delete from empleado where CODEMPLE='$objEmpleadoBean->CODEMPLE'";
           $conexion= new ConexionBD();
           $cn=$conexion->getConexionBD();
           $estado= mysqli_query($cn,$sql);
           mysqli_close($cn);
       } catch (Exception $ex) {
           
       }
return $estado;  
      }
}
?>