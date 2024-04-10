<?php
//inicie a sessao
session_start();

//destrua  todas as variaveis de sessao
$_SESSION = array();


// se desejar destruir completamente a sessao, desconecte a linha abaixo
// session_destrey();

// redirencione para a pagina de login apos o logout
header("Location: index.html");
exit();


?>