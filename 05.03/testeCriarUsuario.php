<?php

require_once './dao/UsuarioDAO.php';

$u = new Usuario();
$u ->setNome("João");
$u ->setEmail("joao@gmail.com");
$u ->setTipo("Funcionário");
$u ->setSenha("segredo123"); 

$dao = UsuarioDAO::getInstance();
$dao ->insert($u);
echo "acabou o código..."

?>
