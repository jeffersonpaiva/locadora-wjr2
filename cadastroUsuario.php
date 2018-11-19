
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
		background:#00BFFF;
		color:#FFF;
		text-transform:uppercase;
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
		</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<section id="segura-items">
<h3>Cadastre-se</h3>
<form name="signup" method="post" action="cadastrando.php">
<table>
 <tr>
    <td><p>NOME:</p></td>
    <td><input type="text" name="nome"></td>
 </tr>
 <tr>
    <td><p>LOGIN:</p></td>
    <td><input type="text" name="EddLogin"></td>
 </tr>
 <tr>
    <td><p>SENHA:</p></td>
    <td><input type="password" name="senha"></td>
 </tr>
 <tr collspan="1">
    <td><button type="submit">Cadastrar</button>
 </tr>
 </section>
    
</body>
</html>