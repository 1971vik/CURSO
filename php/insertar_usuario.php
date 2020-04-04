<?php

     error_reporting(0);
     header('Content-type: application/json; charset=utf-8');
     $nombre = $_POST['nombre'];
     $edad = $_POST['edad'];
     $pais = $_POST['pais'];
     $correo = $_POST['correo'];
     $telefono = $_POST['telefono'];



  function validarDatos($nombre, $edad, $pais, $correo, $telefono){
	if($nombre == ''){
		return false;
	} elseif($edad =='' || is_int($edad)){
		return false;
	} elseif($pais == ''){
		return false;
	} elseif($correo == ''){
		return false;
	} elseif($telefono == ''){
		return false;
	}
	   return true;
 }

	  if(validarDatos($nombre, $edad, $pais, $correo, $telefono)){
		   $conexion = new mysqli('localhost','root', '', 'curso_php.ajax3');
	       $conexion->set_charset('utf8');

	   if($conexion->connect_errno){
		   $respuesta = ['error' => true];
	    }else {
			$statement = $conexion->prepare("INSERT INTO usuarios(nombre,edad,pais,correo,telefono) VALUES(?,?,?,?,?)");
			$statement->bind_param("sisss", $nombre, $edad, $pais, $correo, $telefono);
			$statement->execute();
			//puedes mostrar un mensaje de rerror
			if($conexion->affect_rows <= 0){
				$respuesta = ['error' => true];
			}
			//'error' => false
			$respuesta =[];
		 }
		}else{
			 $respuesta = ['error' => true];
	  }

       echo json_encode($respuesta);



