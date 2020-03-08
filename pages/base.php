<?php 
    $DB_HOST='localhost';
    $DB_USER='root';
    $DB_PASS='';
    $DB_NAME='biblioteka';

    $mysqli=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
    $mysqli->set_charset("utf8");

    if($mysqli->connect_error){
        echo "<p>Server nije dostupan!</p>";
    }
?>