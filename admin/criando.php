<?php
//header('Content-Type: application/json');

try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}
if (isset($_POST['enun'])) {
    $enunciado = $_POST['enun'];

    $global = $_POST['globals'];
    $test = $_POST['test'];


    $altA = $_POST['alA'];
    $altB = $_POST['alB'];
    $altC = $_POST['alC'];
    $altD = $_POST['alD'];
    $altE = $_POST['alE'];

    $correta = $_POST['alt'];

    $materia = isset($_POST['materia']) ? $_POST['materia'] : "null";

    $conteudo = isset($_POST['conteudo']) ? $_POST['conteudo'] : "null";


    //00 000

    $sql_inserir = "INSERT INTO $test (
        q_global,
        q_enum,
        q_alt_a,
        q_alt_b,
        q_alt_c,
        q_alt_d,
        q_alt_e,
        q_correct,
        q_materia,
        q_conteudo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $con->prepare($sql_inserir);
    //$stmt->bind_param("sbssssssss", $global, $enunciado, $altA, $altB, $altC, $altD, $altE, $correta, $materia, $conteudo);
   $array =  array($global, $enunciado, $altA, $altB, $altC, $altD, $altE, $correta, $materia, $conteudo);
    try {
        $stmt->execute($array);
    } catch (PDOException $e) {
        echo 'ERROR UPDATING CONTENT: ' . $e->getMessage();
    }

    header('Location: index.php?labore=1&test=' . $test);
}

    // if ($stmt->rowCount() >= 1) {
    //     echo json_encode(true);
    // } else {
    //     echo json_encode(false);
    // }
    // 
