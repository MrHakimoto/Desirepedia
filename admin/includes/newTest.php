<form action="" method="post">


<div class="container">
<?php echo $return; ?>
<br>
<input class="m-5" type="text" name="table_name">
<br>
<input type="radio" name="dia" id="primeiro" value="1 Dia"> 1 Dia <br>

<input type="radio" name="dia" id="segundo" value="2 Dia"> 2 dia
<input class="btn btn-primary" type="submit" value="Criar">
</div>



</form>


<?php
try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

if(isset($_POST['table_name'])){
$tabela = $_POST['table_name'];
$diaprova = $_POST['dia'];
$nome_table = strtolower(str_replace(' ', '_', $tabela));

$SQLcreateDB = "CREATE TABLE IF NOT EXISTS $nome_table (
    q_global INT(12) NOT NULL,
    q_num INTEGER PRIMARY KEY AUTOINCREMENT,
    q_alt_a TEXT NOT NULL,
    q_alt_b TEXT NOT NULL,
    q_alt_c TEXT NOT NULL,
    q_alt_d TEXT NOT NULL,
    q_alt_e TEXT NOT NULL,
    q_correct TEXT NOT NULL,
    q_materia TEXT NULL,
    q_conteudo TEXT NULL,
    q_enum BLOB
);";

$criar = $con->prepare($SQLcreateDB);
if ($criar->execute()) {
    echo "Deu certo, chefe.";
} else {
    echo "Deu bom não, chefe.";
}


$sqlInsertintotable = "INSERT INTO id_tests (nome_bo_prova, nome_bd_prova, dia_prova) VALUES ('$tabela','$nome_table', '$diaprova')";
$criar2 = $con->prepare($sqlInsertintotable);
$criar2->execute();


}
?>