<?php
// use conecto to data base
//usado para conectar no banco de dados
$host = "localhost";
$db_name = "php_beginner_crud_level_1";
$username = "root";
$password = "";
try{
    $con = new PDO ("mysql:host={host};dbname={db_name}", $username, $password);
}
//show error
//mostrar erros
catch(PDOException $exception){
    echo "connection error: " . $exception->getMessage();
}
?>