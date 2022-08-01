
<?php 

header('Content-Type: application/json');
session_start();
$pdo = new PDO('mysql:host=localhost; dbname=desirepedia;', 'root', '');


if(isset($_POST['type'])) {
    if($_POST['type'] == "passAct") {

        $senha = md5($_POST['data']);


        $stmt = $pdo->prepare("SELECT * FROM user WHERE senha=:na AND id=:co");
        $stmt->bindValue(':na', $senha);
        $stmt->bindValue(':co', $_SESSION['id']);
        $stmt->execute();
        
        if ($stmt->rowCount() >= 1) {
            echo json_encode(true);
        } else {
            echo json_encode(false); 
        }
        
    } 
    elseif ($_POST['type'] == "passNew") {
        $senha = md5($_POST['data']);


        $stmt = $pdo->prepare("UPDATE user SET senha=:na WHERE id=:co");
        $stmt->bindValue(':na', $senha);
        $stmt->bindValue(':co', $_SESSION['id']);
        $stmt->execute();
        
        if ($stmt->rowCount() >= 1) {
            echo json_encode(true);
        } else {
            echo json_encode(false); 
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
