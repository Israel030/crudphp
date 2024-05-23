<?php
//conexion a la baqse de datos utilizando PDO 
try {
    $servidor="localhost";
    $usuario="root";
    $DBname = "website";
    $pass = "";

    $con =new PDO("mysql:host=$servidor;dbname=$DBname",$usuario,$pass);
    // echo "Conexion Exitosa!";

} catch (\Throwable $th) {
    throw $th;
}

?>

