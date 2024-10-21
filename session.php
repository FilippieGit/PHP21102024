<?php 

	session_start();

	$_SESSION['nome'] = "Administrador";

	//elimina todas as variáveis de sessão, mas mantém a sessão;
	session_unset();

	//elimina toda a sessão;
	//session_destroy();

 ?>

<h3>Sessão de Uusário</h3>
Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>