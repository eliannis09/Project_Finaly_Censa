<?php 

   //Clase propia de php que llama a las funciones necesarias para crear la conexión y las retorna en una variable llamada $con
	class Conexion{		

		public function __construct(){}
		public function __destruct(){}

		public function conectar(){
			include_once "config.php";
			$con=null;
			try{
				$con=new PDO("mysql:localhost=".HOST.":81;dbname=".DB.";charset=utf8",USUARIO,CLAVE);
				$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);				
			}
			catch(PDOException $ex){
				echo "Error:".$ex->getMessage();
			}
			return $con;
		}
	} 
?>
