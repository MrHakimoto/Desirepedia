<?php 

include_once("conexao.php");

$con = con();

$selecionarUPLOAD = "SELECT * FROM user WHERE id=". $_SESSION['id'];
$consultar = $con->query($selecionarUPLOAD);
$dados = array();
while ($row = $consultar->fetch_assoc()) {
    $caminho = $row['picture'];
}
if ($caminho == null) {
    $caminho = "sem-image.jpg";
}


function urls(){
    return sprintf(
      "%s://%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME']
    );
  }
  

$pathh = urls() . "/Desirepedia/database/" . $caminho; 
//   https://github.com/mdo.png
?>