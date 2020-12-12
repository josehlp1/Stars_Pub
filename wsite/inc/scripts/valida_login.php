<?php 
include_once('../scripts/conexao.php');

$_POST['senha'] = md5($_POST['senha']);

$sql_valida = "SELECT * FROM sp_users where user_email = '".$_POST['email']."' AND user_senha = '".$_POST['senha']."' ";
echo $sql_valida;

$result = mysqli_query($conn, $sql_valida);
$row = mysqli_fetch_array($result);
$nr_rows = mysqli_num_rows($result);

if ($nr_rows == 1){

    $_SESSION['email'] = $row['user_email'];
    $_SESSION['name'] = $row['user_name'];
    print_r($_SESSION);
}

header("Location: ../../index.php");    


?>