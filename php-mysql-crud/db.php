<?php

session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'aplicacion_php'
);

# muesta si se conecto a la base de datos 
#if (isset($conn)) {
#    echo 'DB is connected';
#}
?>