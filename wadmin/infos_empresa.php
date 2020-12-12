<?php
include_once("inc/scripts/conexao.php");
include_once("inc/header.php");
if (empty($_SESSION['email_admin']) || !isset($_SESSION['email_admin'])) {
    header("Location: login.php");
}
?>
</script>

<main>
    <div class="container">
    <br>
            <br>
            <h1>Horario de Funcionamento</h1>

    </div>
</main>

<?php include_once("inc/footer.php"); ?>