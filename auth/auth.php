<?php

include_once("../functions/conexao.php");
$con = con();




require_once '../vendor/autoload.php';

use Google\Client as GoogleClient;

$jwt = new \Firebase\JWT\JWT;
$jwt::$leeway = 60;

if (!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])) {
    header("Location: index.php?error=1");
} else {

    $cookie = $_COOKIE['g_csrf_token'] ?? '';


    if ($_POST['g_csrf_token'] != $cookie) {
        header("Location: index.php?error=1");
    }

    //Cria instância
    $client = new GoogleClient(['client_id' => '931857203907-8isaavdi8cnt31ahmq8hcvgei1l700j1.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($_POST['credential']);

    if (isset($payload['email'])) {
        echo "<pre>";
        print_r($payload);
        echo "</pre>";

        session_start();
        $_SESSION['nome'] =  $payload['given_name'];
        $_SESSION['nome2'] = $payload['family_name'];
        $_SESSION['email'] = $payload['email'];
        $_SESSION['photo'] = $payload['picture'];

        echo $_SESSION['nome'];

        echo "<br>";
        echo $_SESSION['email'];
        echo "<br>";
        echo $_SESSION['photo'];

        $sql = "SELECT * FROM user WHERE email=" . $_SESSION['email'];

        $stmt = $con->query($sql);

        if (mysqli_affected_rows($con) > 0) {
            echo "CU!";
            $data = array();
            while ($rows = $stmt->fetch_assoc()) {
                $data[] = $rows;
            }
            $_SESSION['id'] = $data['id'];
            $_SESSION['nome'] = $data['nome'];
            $_SESSION['nome'] = $data['nome'];
            $_SESSION['nome'] = $data['nome'];
            $_SESSION['nome'] = $data['nome'];
        } else {
            $sql = "INSERT INTO user (nome, email, picture) VALUES (?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sss", $_SESSION['nome'] . " " . $_SESSION['nome2'], $_SESSION['email'], $_SESSION['picture']);
            $stmt->execute();
        }
    }
}







$con->close();

?>
<br>

<img src="<?php echo $_SESSION['photo']; ?>" alt="a fotinha">