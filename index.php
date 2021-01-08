<?php

require_once("config.php");

// Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

// Carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Jo");

//echo json_encode($search);

// carrega um usuario usando o login e a senha.

$usuario = new Usuario();
$usuario->login('Josue','999');

echo $usuario;

?>