<?php
header('Content-Type: application/json');
//echo json_encode($_POST['prova']);

try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo json_encode($_POST['prova']);

if (isset($_POST['prova'])) {
    $prova = $_POST['prova'];
    $num = $_POST['num'];
    $enunci = $_POST['enunciado'];
    $altA = $_POST['altA'];
    $altB = $_POST['altB'];
    $altC = $_POST['altC'];
    $altD = $_POST['altD'];
    $altE = $_POST['altE'];
    $correct = $_POST['altCorret'];

    echo json_encode($correct);


    // // $sql_prova = "SELECT * FROM " . $prova . " WHERE q_num=" . intval($num);
    // // $ir = $con->prepare($sql_prova);

    // // // 
    // // $ir->execute(); // 

    // // // Get the results.
    // // $iremos = $ir->fetchAll(PDO::FETCH_ASSOC);
    // // foreach ($iremos as $row) {
    // //     print_r($row);

    // //     $n_questao = $row['q_num'];

    // //     $enunciado = $row['q_enum'];

    // //     $val_a = $row['q_alt_a'];
    // //     $val_b = $row['q_alt_b'];
    // //     $val_c = $row['q_alt_c'];
    // //     $val_d = $row['q_alt_d'];
    // //     $val_e = $row['q_alt_e'];

    // //     $certinha = $row['q_correct'];

    // // }

        $alterar = "UPDATE $prova SET 
        q_enum=?, 
        q_alt_a=?, 
        q_alt_b=?, 
        q_alt_c=?, 
        q_alt_d=?, 
        q_alt_e=?, 
        q_correct=? 
        WHERE q_num=?";
        $lancar = $con->prepare($alterar);

        // 
        $array_content  = array($enunci, $altA, $altB, $altC, $altD, $altE, $correct, intval($num));
        $lancar->execute($array_content); 

        if ($lancar->rowCount() >= 1) {
            echo json_encode("Deu bom");
        } else {
            echo json_encode("Deu ruim");
        }
        header('Location: index.php?labore=2&test=' . $prova . '&q=' . $num);
}
