<?php


<?php

	 header('Content-type: application/json; charset=utf-8');

     $respuesta = [
         [
            'id' => '5b9c49f09b0a13367ad35ff9',
			'nombre' => 'Carlos',
			'edad'=> 23,
			'pais' => 'Mexico',
		     'correo'=> 'correo@correo.com',
<<<<<<< HEAD
		     'phone'=> '240 3644770'
=======
		     'JSONstring'=> '2403644770'
>>>>>>> experimento3
		  ],
		  [
		    'id' => '5b9c49f09b0a13367ad35ff9',
			'nombre' => 'Alberto',
			'edad'=> 30,
			'pais' => 'Colombia',
<<<<<<< HEAD
		     'correo' =>'correo@correo.com',
		     'phone'=> '240 3644771'
=======
		     'correo' =>'correo@correo.com'
		      'JSONstring'=> '2403644771'
>>>>>>> experimento3

				]
		];
		echo json_encode($respuesta);
		//echo '<pre>';
		//var_dump($respuesta);
		//echo '</pre>';

	//echo '[{"nombre":"Carlos"},{"nombre":"Alejabdro"}]';