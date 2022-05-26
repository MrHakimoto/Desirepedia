<?php
require __DIR__.'/vendor/autoload.php';

use Google\Client as GoogleClient;


if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token']) ){
    header("Location: index.php?error=1");
}

$cookie = $_COOKIE['g_csrf_token'] ?? '';


if($_POST['g_csrf_token'] != $cookie) {
    header("Location: index.php?error=1");
}

//Cria instância
$client = new GoogleClient(['client_id' => '31857203907-8isaavdi8cnt31ahmq8hcvgei1l700j1.apps.googleusercontent.com']); 
$payload = $client->verifyIdToken($_POST['credential']);
if (isset($payload['email'])) {
    print_r($payload);
}


print_r($cookie);

print_r($_POST);


?>