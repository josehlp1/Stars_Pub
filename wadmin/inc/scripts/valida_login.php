<?php 
include_once('../scripts/conexao.php');

$_POST['senha'] = md5($_POST['senha']);

$sql_valida = "SELECT * FROM sp_admin_users where user_email_admin = '".$_POST['email']."' AND user_senha_admin = '".$_POST['senha']."' ";
echo $sql_valida;
$result = mysqli_query($conn, $sql_valida);

$row = mysqli_fetch_array($result);
$nr_rows = mysqli_num_rows($result);

if ($nr_rows == 1){

    $_SESSION['email_admin'] = $row['user_email_admin'];
    $_SESSION['name_admin'] = $row['user_name_admin'];

}

header("Location: ../../index.php");    


?>