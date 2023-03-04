<?php

try {
    $baglan = new PDO("mysql:host=localhost; dbname=firma","root","");
    //echo "Bağlandı";
} catch (PDOException $e) {
    echo $e;
}

?>