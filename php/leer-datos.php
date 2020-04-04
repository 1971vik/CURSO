<?php
 error_reporting(0);
 header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', '', 'curso_php.ajax3');

if($conexion->connect-errno){

	$respuesta = [
        'error' => true

      ];
	}else {
       $conexion->set_charset("utf8");

       $statement = $conexion->prepare("SELECT * FROM usuarios");
       $statement->execute();
       $resultados = $statement->get_result();

       //echo '<pre>';
       //var_dump($resultados->fetch_assoc());
       //echo '</pre>';

       $respuesta = [];

       while($fila = $resultados->fetch_assoc()){
       	 $usuario = [

               'id'       => $fila['ID'],
               'nombre'   => $fila['nombre'],
               'edad'     => $fila ['edad'],
               'pais'     => $fila['pais'],
               'correo'   => $fila['correo'],
               'telefono' => $fila['telefono']
       	 ];
       	 array_push($respuesta, $usuario);
       }
}

echo json_encode($respuesta);