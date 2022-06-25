<?php

try {
    $con = new PDO("sqlite:conteudos.db");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/9m7br97tvi49do4krkoz9z47u4t5vto64qqgrfcty65xqocr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    tinymce.init({
        selector: '#altE',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altC',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
</script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<p>Matéria</p>



<form action="" method="POST">

<select class="form-select form-select-lg mb-3" name="materia" aria-label=".form-select-lg example">
    <option >Selecione uma disciplina</option>
    <option value="biologia">Biologia</option>
    <option value="filosofia">Filosofia</option>
    <option value="fisica">Física</option>
    <option value="geografia">Geografia</option>
    <option value="história">História</option>
    <option value="literatura">Literatura</option>
    <option value="matematica">Matemática</option>
    <option value="portugues">Português</option>
    <option value="quimica">Química</option>
    <option value="sociologia">Sociologia</option>
    <option value="espanhol">Espanhol</option>
    <option value="inglês">Inglês</option>
    <option value="arte">Arte</option>
</select>


<p>Conteúdos</p>
<div class="my-5">
    <input type="text" id="altE" name="conteudo">
</div>



<p>Sub-Conteúdos</p>
<div class="my-5">
    <input type="text" id="altC" name="sconteudo">
</div>

<p> Especific </p>
<div class="my-5">
    <input type="text" id="altC" name="espefic">
</div>

<input type="submit" value="Guardar">

</form>
<br><br><br><br><br><br><br><br>

<?php 
echo $_POST['materia'];
if (isset($_POST['conteudo'])) {

$materia = $_POST['materia'];
$conteudo = $_POST['conteudo'];
$sconteudo = isset($_POST['sconteudo']) ? $_POST['sconteudo'] : null;
$especific = isset($_POST['espefic']) ? $_POST['espefic'] : null;




$mandarSQL = "INSERT INTO $materia (conteudos, subconteudos, especific) VALUES ('$conteudo','$sconteudo','$especific');";
$ide = $con->prepare($mandarSQL);
$ide->execute();


}

$select = "SELECT * FROM $materia";
$stmt = $con->prepare($select);

// Execute statement.
$stmt->execute(); // ID between 1 and 3.

// Get the results.
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
    print_r($row);
}


$sqlcreate = "CREATE TABLE IF NOT EXISTS biologia (conteudos TEXT, subconteudos TEXT, especific TEXT);";
$con->query($sqlcreate);

?>