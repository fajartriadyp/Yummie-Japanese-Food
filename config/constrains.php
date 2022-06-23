<?php
    //create constraint untuk store non repeat value
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME', 'restoyummie');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn)); //database connection
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn)); //select database 

?>




