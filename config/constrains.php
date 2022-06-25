<?php
    //Start Seassion
    session_start();

    //create constraint untuk store non repeat value
    define('SITEURL', 'http://localhost/yummie/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME', 'restoyummie');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //database connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $db_select = mysqli_select_db($conn,DB_NAME); //select database 


?>




