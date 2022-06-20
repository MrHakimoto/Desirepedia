<?php

try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}


if(!empty($_GET['test'])){
        echo "<h1> Editando </h1> : <p>" . $_GET['test'] . "</p>";

        $nome_da_tabela =  $_GET['test'];

        $selecionar_qst = "SELECT * FROM ". $nome_da_tabela . " ORDER BY q_num ASC";

        $data = $con->prepare($selecionar_qst);

        $data->execute(); // ID between 1 and 3.
 
        // Get the results.
        $results = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $row) {
            echo "<a class='btn btn-lg btn-primary m-2' href='". $_SERVER["REQUEST_URI"] . "&q=". $row['q_num'] ."'> Questão: " . $row['q_num'] . "</a> <br> <br>";

        //print_r($row);
        }















        echo "<button class='btn btn-danger' onclick='remover()'> Escolher outra prova: </button>";

        echo "<script>  
        function remover() { 
            url = new URL(window.location.href);
            let params = url.searchParams;   
            params.delete('test');
            window.location = document.URL.replace('&test=". $_GET['test'] ."',''); 
        }  </script> ";
} else {

$ver = "SELECT * FROM sqlite_master WHERE type='table'";
$stmt = $con->prepare($ver);
 
// Execute statement.
$stmt->execute(); // ID between 1 and 3.
 echo $_SERVER["REQUEST_URI"];
// Get the results.
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row) {
    //print_r($row);
    echo "<br>";
    echo "<a class='btn btn-lg btn-primary m-2' href='". $_SERVER["REQUEST_URI"] . "&test=". $row['name'] ."'>" . $row['name'] . "</a> <br> <br>";
}

}


?>

<div