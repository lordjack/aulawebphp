<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=agenda"
        , "root", "123456");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>