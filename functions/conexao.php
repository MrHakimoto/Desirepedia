<?php

function con() {
    $mysqli = new mysqli('localhost', 'root', '', 'diserepedia');
    $mysqli->set_charset("utf8mb4");
    return $mysqli;
}



?>