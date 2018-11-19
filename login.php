<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$EddLogin = mysqli_escape_string($connect, $_POST['EddLogin']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(isset($_POST['lembrar-senha'])):

		setcookie('EddLogin', $EddLogin, time()+3600);
		setcookie('senha', md5($senha), time()+3600);
	endif;

	if(empty($EddLogin) or empty($senha)):
		$erros[] = "<li> O campo Login/senha precisa ser preenchido </li>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT EddLogin FROM tb_usuarios WHERE EddLogin = '$EddLogin'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$sql = "SELECT * FROM tb_usuarios WHERE EddLogin = '$EddLogin' AND senha = '$senha'";

		

		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: index.php');
				
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente, cadastre-se!!! </li>";
		endif;

	endif;

endif;
?>

<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<style>
	li{
		font-size: 200%;
		text-align: center;
		margin-top: 5px;
		color: black;
	}

	body{
	background-image: url('https://i0.wp.com/www.rcaconsorcio.com.br/wp-content/uploads/2016/04/carros.png?ssl=1');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 3em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
	}

	section#segura-items {
		margin: 5% auto;
		display: block;
		position: relative;
		background: rgba(0,0,0,0.5);
		padding: 25px;
		border-top-left-radius: 50px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		box-shadow: 20px 6px 29px rgba(0, 0, 0, 0.67);
		width: 300px;
	}

	h3 {
		font-size: 135%;
		text-align: center;
		margin-top: 5px;
		color: #EFFBFB;
		
	}

	input[type="password"]{
		border-radius:2px;
		border: 1px solid #cacaca;
		display:block;
		margin: 0 auto;
		padding: 12px;
		margin-top: 12px;
		width: 80%;
	}

		input[type="text"],
		select{
		border-radius:2px;
		border: 1px solid #cacaca;
		display:block;
		margin: 0 auto;
		padding: 12px;
		margin-top: 12px;
		width: 80%;
		}

		button[type="submit"]{
		display:block;
		margin: 11px auto;
		background:#00BFFF;
		color:#FFF;
		text-transform:uppercase;
		width: 80%;
		border: 0px;
		padding: 12px;
		border-radius: 5px;
		font-size: 87%;
		font-weight: bold;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.78);
		}

		button[type="submit"]:hover{
		background: #4a9603;
		text-shadow: none;
		}
		span#status {
		position: fixed;
		background: transparent;
		width: 100%;
		bottom: 0;
		padding: 14px;
		color: #00bfff;
		}

		p{
			float: left;
			color: #EFFBFB
		}
		a[type="submit"]{
		display:block;
		margin: 11px auto;
		background:#00BFFF;
		color:#FFF;
		text-transform:uppercase;
		width: 80%;
		border: 0px;
		padding: 12px;
		border-radius: 5px;
		font-size: 87%;
		font-weight: bold;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.78);

		
		</style>
</head>
<body>


<?php 
if(!empty($erros)):
	foreach($erros as $erro):
		echo $erro;
	endforeach;
endif;
?>
<section id="segura-items">
<h3>Faça seu Login </h3>
<form id="meuForm" action="Login.php" method="POST" >
<p>Login:</p> <input type="text" name="EddLogin" value="<?php echo isset($_COOKIE['EddLogin']) ? $_COOKIE['EddLogin'] : '' ?>"><br>
<p>Senha:</p> <input type="password" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
<button type="submit" name="btn-entrar"> Entrar </button>
<a href="cadastroUsuario.php" type="submit" name="Cad"> Cadastre-se </a>
</form> 
</section>


</body>
</html>