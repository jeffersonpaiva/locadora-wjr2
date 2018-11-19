<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_new_locare";

$connect = mysqli_connect($servername,$username,$password,$db_name);

if(mysqli_connect_error()):
    echo"falha na conexão".mysqli_connect_error();
endif;
// $conexao = new PDO('mysql:host=localhost;dbname=db_new_locare', 'root', '');
// $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $conexao->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
?>
<?php
$nome = $_POST['nome'];
$login = $_POST['EddLogin'];
$senha = $_POST['senha'];


$sql = mysqli_query($connect,"INSERT INTO TB_USUARIOS(nome,Eddlogin,senha) VALUES('$nome','$login',MD5('$senha'))");
    
    header('Location: login.php');
?>