<?php 

require_once("config.php");

/* $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */
/* 
//CARREGA UM USUARIO
$root = new Usuario();
$root->loadById(5);

echo $root;
 */
/* 
 //CARREGA UMA LISTA DE USUARIOS
$lista = Usuario::getList();

echo json_encode($lista);
 */
/* 
//CARREG UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN

$search = Usuario::search("jo");
echo json_encode($search);
 */

//CARREGA UM USUARIO USANDO UM LOGIN E A SENHA
/* 
$usuario = new Usuario();
$usuario->login("jose", "1234567890");

echo $usuario;
 */
/* 
//CRIANDO UM NOVO USUARIO
 $aluno = new Usuario("asdrubal","P@ssw0rd");
 $aluno->insert();

 echo $aluno;
 */

 $usuario = new Usuario();
 $usuario->loadById(13);

 $usuario->update("professor","pr0f3550R");
echo $usuario;


?>