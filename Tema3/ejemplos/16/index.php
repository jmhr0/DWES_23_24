<?php

$equipos = [
    [
        'id' => 1,
        'nombre' => 'Real madrid',
        'ciudad' => 'madrid'
    ],
    [
        'id' => 2,
        'nombre' => 'Real betis',
        'ciudad' => 'sevilla'
    ],
    [
        'id' => 3,
        'nombre' => 'FC Barcelona',
        'ciudad' => 'Barcelona'
    ],
    [
        'id' => 4,
        'nombre' => 'Real madrid',
        'ciudad' => 'madrid'
    ]
    ];


foreach ($equipos as $equipo) {
    echo 'id: '.$equipo['id'];
    echo 'nombre: '.$equipo['nombre'];
    echo 'ciudad: '.$equipo['ciudad'];
    echo '<br>';
}

?>