<?php 
function url2()
{
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

$pathMain = url2() ."/Desirepedia";


$_SESSION['pathMain'] = $pathMain;



?>