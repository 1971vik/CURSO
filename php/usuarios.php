<?php

 header('Content-type: application/json; charset=utf-8');

$respuesta = [
      [
      	'id' => '5b9c49f09b0a13367ad35ff9',
      	'nombre' => 'Victor',
      	'edad' => 49,
      	'pais' => 'Mexico',
      	'correo' => 'correo@correo.com',
      	'telefono' => '2403644770'

      ],
      [
       'id' => '5b9c49f09b0a13367ad35ff9',
      	'nombre' => 'Jose',
      	'edad' => 59,
      	'pais' => 'Espana',
      	'correo' => 'correo@correo.com',
      	'telefono' => '2403644770'
      ]
];

    echo json_encode($respuesta);
  //echo '<pre>'

  //var_dump($respuesta);

  //echo '</pre'>

//echo '[{"nombre": "Carlos"}, {"nombre": "Victor"}]';