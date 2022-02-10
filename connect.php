<?php

    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "newweb_db";

    $title_name = array(
        'index' => 'Jintaphas CRUD',
        'insert' => 'Insert Page',
        'update' => 'Update Page'
    );


    try {
    $conn = new PDO("mysql:server=$servername;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>