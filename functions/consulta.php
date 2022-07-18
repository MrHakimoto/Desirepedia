<?php 

header('Content-Type: application/json');

$pdo = new PDO('mysql:host=localhost; dbname=desirepedia;', 'root', '');


if(isset($_POST['type'])) {
    if($_POST['type'] == "register") {

        $mail = $_POST['emailR'];

        $stmt = $pdo->prepare("SELECT * FROM user WHERE email=:na ");
        $stmt->bindValue(':na', $mail);
        $stmt->execute();
        
        if ($stmt->rowCount() >= 1) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
        
    }
}











/*header('Content-Type: application/json');

$nome = $_POST['name'];
$comentario = $_POST['comentario'];


$pdo = new PDO('mysql:host=localhost; dbname=bf_test;', 'root', '');

$stmt = $pdo->prepare('INSERT INTO comentario (nome, comentario) VALUES (:na, :co)');
$stmt->bindValue(':na', $nome);
$stmt->bindValue(':co', $comentario);
$stmt->execute();

if ($stmt->rowCount() >= 1) {
    echo json_encode('Comentário Salvo com Sucesso');
} else {
    echo json_encode('Falha ao salvar comentário');
}*/

?>