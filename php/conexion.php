<?php
/*Datos de conexion a la base de datos*/
$db_host = "localhost"; //servidor
$db_user = "mapas_pers"; //usuario
$db_pass = "pers_orinoquia"; //contraseña
$db_name = "pers_re"; //base de datos


try {
    $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $con->set_charset("utf8");
} catch (mysqli_sql_exception $e) {
    
}


?>