
<?php 
    include_once('../scripts/conexao.php');

    session_start ();
	session_destroy ();
    header("Location: ../../index.php");  
?>