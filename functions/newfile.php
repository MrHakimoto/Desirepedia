<?php
session_start();
echo json_encode("CHEGAMOS1");
include_once("../functions/conexao.php");
$con = con();
header('Content-Type: application/json');
date_default_timezone_set('America/Sao_Paulo');
// making the name of the file
$file_name = $_FILES['file']['name'];



// file extension
$file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
//$file_extension = strtolower($file_extension);

$newname = md5(time()) . '-' . date("m-d-y") . '.' . $file_extension;

//This is the file upload Location... a folder called upload
$file_location = '../database/' . $newname;

// Valid image extensions permitted for upload
$image_ext = array("jpg", "png", "jpeg");

$response_data = 0;
if (in_array($file_extension, $image_ext)) {
    // Uploading the file to the specified location in line 7


    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_location)) {
        $response_data = $file_location; //Returning the data that contains the image to be rendered
    }
}

echo json_encode($response_data); //Returning the data to the ajax call


$query = mysqli_query($con, "INSERT INTO picture_db (id_creator, caminho) VALUES (" . $_SESSION['id'] . ", '" . $file_location . "')");

$selecionarUPLOAD = "SELECT * FROM picture_db WHERE caminho='$file_location'";
$consultar = $con->query($selecionarUPLOAD);
$dados = array();
while ($row = $consultar->fetch_assoc()) {
    $dados[] = $row;
}

$SQL_Para_O_User = "UPDATE user SET picture='" . $newname . "'";
$con->query($SQL_Para_O_User);

if ($query) {
    json_encode('ARQUIVO INSERIDO');
} else {
    json_encode('DEU MERDA');
}

///////////////////////////////////////////

//     if (isset($_POST['arquivo_alteracao'])) {
//         echo json_encode("123CHEGAAAA");
//     }

//     if (isset($_FILES['arquivo_alteracao'])) {
//         echo json_encode("CHEGAAAA");
//         // Posted Values
//         $imgtitle = $_POST['imagetitle'];
//         $imgfile = $_FILES["arquivo_alteracao"]["name"];
//         // get the image extension
//         $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
//         // allowed extensions
//         $extenções_permitidas = array(".jpg", "jpeg", ".png");
//         // Verificar se existem as extenções pela função .in_array().
//         if (!in_array($extension, $extenções_permitidas)) {
//             die(json_encode("Apenas é possivel aceitar os formatos .jpg, .jpeg ou .png!"));
//         } else {
//             //rename the image file
//             $imgnewfile = md5(time()) . "-" . date("m.d.y") . $extension;
//             // Code for move image into directory
//             move_uploaded_file($_FILES["image"]["tmp_name"], "../database" . $imgnewfile);
//             // ADCIONANDO AO BANCO DE DADOS:
            
//             $query = mysqli_query($con, "INSERT INTO picture_db (id_creator, caminho) VALUES (". $_SESSION['id'] .", '". $imgnewfile ."')");

//            $selecionarUPLOAD = "SELECT * FROM picture_db WHERE caminho='$imgnewfile'";
//            $consultar = $con->query($selecionarUPLOAD);
//            $dados = array(); 
//            while ($row = $consultar->fetch_assoc()) {
//             $dados[] = $row;
//            }

//             $SQL_Para_O_User = "UPDATE user SET picture='" . $dados['id'] ."'";
//             $con->query( $SQL_Para_O_User);

//             if ($query) {
//                 json_encode('Data inserted successfully');
//             } else {
//                 json_encode('Data not inserted');
//             }
//         }
//     }
//     session_destroy();
