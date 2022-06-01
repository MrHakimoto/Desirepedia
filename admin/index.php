<?php

try {
    $con = new PDO("sqlite:../db/test.db3");

} catch (PDOException $e) {
    echo $e->getMessage();
}



?>

<?php


    // $con = new PDO("sqlite:../db/test.db3");
    // $ano_Da_prova = 2017;
    // $sql = "SELECT * FROM enem WHERE provaAno=$ano_Da_prova";
    // $resultado = $con->query($sql);
    // while ($row = $resultado->fetchArray()) {
    //     var_dump($row);
    //}

?>



