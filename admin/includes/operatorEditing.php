<?php
header('Content-Type: application/json');
try {
    $con = new PDO("sqlite:../../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

$prova = $_POST['prova'];
$num = $_POST['num'];
$enunci = $_POST['enunciado'];
$altA = $_POST['altA'];
$altB = $_POST['altB'];
$altC = $_POST['altC'];
$altD = $_POST['altD'];
$altE = $_POST['altE'];
$correct = $_POST['correct'];



$sql_prova = "SELECT * FROM " . $prova . " WHERE q_num=" . intval($num);
$ir = $con->prepare($sql_prova);

// 
$ir->execute(); // 

// Get the results.
$iremos = $ir->fetchAll(PDO::FETCH_ASSOC);
foreach ($iremos as $row) {
    print_r($row);

    $n_questao = $row['q_num'];

    $enunciado = $row['q_enum'];

    $val_a = $row['q_alt_a'];
    $val_b = $row['q_alt_b'];
    $val_c = $row['q_alt_c'];
    $val_d = $row['q_alt_d'];
    $val_e = $row['q_alt_e'];

    $certinha = $row['q_correct'];

}

if ($enunciado == $enunci && $val_a == $altA && $val_b == $altC && $val_d == $altD && $val_e == $altE && $certinha == $correct) {
    echo json_encode('Todos os textos são iguais');
} else {
    $alterar = "UPDATE $prova SET 
    q_enum='$enunci', 
    q_alt_a='$altA', 
    q_alt_b='$altB', 
    q_alt_c='$altC', 
    q_alt_d='$altD', 
    q_alt_e='$altE', 
    q_corret='$certinha' 
    WHERE q_num=" . intval($num);
    $lancar = $con->prepare($alterar);

    // 
    $lancar->execute(); 
}



?>