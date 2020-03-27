<?php

	 header('Content-type: application/json; charset=utf-8');

     $respuesta = [
         [
            'id' => '5b9c49f09b0a13367ad35ff9',
			'nombre' => 'Carlos',
			'edad'=> 23,
			'pais' => 'Mexico',
		     'correo'=> 'correo@correo.com'
		  ],
		  [
		    'id' => '5b9c49f09b0a13367ad35ff9',
			'nombre' => 'Alberto',
			'edad'=> 30,
			'pais' => 'Colombia',
		     'correo' =>'correo@correo.com'

			]
		];
		echo json_encode($respuesta);
		//echo '<pre>';
		//var_dump($respuesta);
		//echo '</pre>';

	//echo '[{"nombre":"Carlos"},{"nombre":"Alejabdro"}]';