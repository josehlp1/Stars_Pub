<?php 
include_once('../scripts/conexao.php');

$sql_valida = "SELECT * FROM sp_users where user_email = '".$_POST['email']."'";
$sql_valida = mysqli_query($conn, $sql_valida);
$sql_valida_num_rows = mysqli_num_rows($sql_valida);

if($sql_valida_num_rows > 0){

}else{
    
    $_POST['senha'] = md5($_POST['senha']);

    $sql_register = "INSERT INTO sp_users (user_name, user_email, user_senha) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['senha']."')";   
    echo $sql_register;
    $sql_register =  mysqli_query($conn, $sql_register);

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['name'] = $_POST['name'];
    

}

//header("Location: ../../index.php");    


?>