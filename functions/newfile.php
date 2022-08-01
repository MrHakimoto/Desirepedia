<?php
session_start();
json_encode("CHEGAMOS");
include_once("../functions/conexao.php");
    $con = con();
    header('Content-Type: application/json');
    date_default_timezone_set('America/Sao_Paulo'); 

    if (isset($_FILES['arquivo_alteracao'])) {
        // Posted Values
        $imgtitle = $_POST['imagetitle'];
        $imgfile = $_FILES["arquivo_alteracao"]["name"];
        // get the image extension
        $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
        // allowed extensions
        $extenções_permitidas = array(".jpg", "jpeg", ".png");
        // Verificar se existem as extenções pela função .in_array().
        if (!in_array($extension, $extenções_permitidas)) {
            die(json_encode("Apenas é possivel aceitar os formatos .jpg, .jpeg ou .png!"));
        } else {
            //rename the image file
            $imgnewfile = md5(time()) . "-" . date("m.d.y") . $extension;
            // Code for move image into directory
            move_uploaded_file($_FILES["image"]["tmp_name"], "../database" . $imgnewfile);
            // ADCIONANDO AO BANCO DE DADOS:
            
            $query = mysqli_query($con, "INSERT INTO picture_db (id_creator, caminho) VALUES (". $_SESSION['id'] .", '". $imgnewfile ."')");

           $selecionarUPLOAD = "SELECT * FROM picture_db WHERE caminho='$imgnewfile'";
           $consultar = $con->query($selecionarUPLOAD);
           $dados = array(); 
           while ($row = $consultar->fetch_assoc()) {
            $dados[] = $row;
           }

            $SQL_Para_O_User = "UPDATE user SET picture='" . $dados['id'] ."'";
            $con->query( $SQL_Para_O_User);

            if ($query) {
                json_encode('Data inserted successfully');
            } else {
                json_encode('Data not inserted');
            }
        }
    }
    session_destroy();
    ?>