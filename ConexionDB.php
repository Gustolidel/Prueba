<?php
class ConexionBD {
   const SERVER ="blhgzm7zj4tgqhwgisg1-mysql.services.clever-cloud.com"   ;
   const USER ="utjolb6napc2uqpi";
   const PASS="MYPdfeqZiIE9z5YzvCUF";
   const DATABASE ="blhgzm7zj4tgqhwgisg1";
   
   private $cn = null;
   
   public function getConexionBD (){
       try {
           $this->cn= mysqli_connect(self::SERVER,self::USER,self::PASS,self::DATABASE);
       } catch (Exception $e) {
    
       }
       return $this-> cn;   
   }
}
?>