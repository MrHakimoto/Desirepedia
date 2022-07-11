<form action="" method="post">


<div class="container">
<?php echo $return; ?>
<br>
<input class="m-5" type="text" name="table_name">
<br>
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
$nome_table = strtolower(str_replace(' ', '_', $tabela));

$SQLcreateDB = "CREATE TABLE IF NOT EXISTS $nome_table (
    q_global INT(12) NOT NULL,
    q_num INTEGER PRIMARY KEY AUTOINCREMENT,
    q_enum TEXT NOT NULL,
    q_alt_a TEXT NOT NULL,
    q_alt_b TEXT NOT NULL,
    q_alt_c TEXT NOT NULL,
    q_alt_d TEXT NOT NULL,
    q_alt_e TEXT NOT NULL,
    q_correct TEXT NOT NULL,
    q_materia TEXT NULL,
    q_conteudo TEXT NULL
);";

$criar = $con->prepare($SQLcreateDB);
$criar->execute();


$sqlInsertintotable = "INSERT INTO id_tests (nome_bo_prova, nome_bd_prova) VALUES ('$tabela','$nome_table')";
$criar2 = $con->prepare($sqlInsertintotable);
$criar2->execute();


}
?>