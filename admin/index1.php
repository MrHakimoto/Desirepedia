<?php

include("index.php");

$sql = "CREATE TABLE if not exists demo (ID integer primary key, Name varchar(20), Hint text )";

$resultado = $con->query($sql);

?>

<form action="" method="POST">
    <span>Name</span> <input type="text" name="nome"> <br>
    <span>Hint</span> <input type="text" name="hint">
    <br>
    <br>
    <input type="submit" value="LANÇAR">
</form>

<?php

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $hint = $_POST['hint'];

    $sqlUP = "INSERT INTO demo(Name, Hint) VALUES ('$nome','$hint')";
    $con->query($sqlUP);
}


$sqlSEL = "SELECT * FROM demo";
//$chama = $con->query($sqlSEL);
// $row = array();
// while ($row = $chama->fetchArray(SQLITE3_ASSOC)) {
//     var_dump($row);
// }


$result = $con->query($sqlSEL); //->fetchArray(SQLITE3_ASSOC);

$i = 0;

$results = $con->query($sqlSEL);
$data = $results->fetchAll();
//print_r($data);



while ($row = $results->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    print $row['ID'] . " " . $row['Name'] . " " . $row['Hint'] . "<br>";
    print $data;
}

 // success
foreach ($con->query($sqlSEL) as $row) {
    print $row['ID'] . " " . $row['Name'] . " " . $row['Hint'] . "<br>";
}
//print_r($data);

// while ($res = $result->fetchArray()) {

//     if (!isset($res['user_id'])) continue;

//     $row[$i]['user_id'] = $res['user_id'];
//     $row[$i]['username'] = $res['username'];
//     $row[$i]['opt_status'] = $res['opt_status'];

//     $i++;
// }





?>