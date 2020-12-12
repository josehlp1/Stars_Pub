<?php
include_once("inc/scripts/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://safi.me.uk/typewriterjs/js/typewriter.js"></script>
    <script src="https://kit.fontawesome.com/218656dad7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="inc/scripts/jquery.js" type="text/javascript"></script>
    <meta http-equiv="Content-Language" content="en">
    <title>Star’s Pub - ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpeg" type="jpeg" sizes="16x16">
    <meta charset="utf-8">
</head>

<body>

    <main class="login-admin">
        <div class="container">
            <div class="login-form">
                <form action="inc/scripts/valida_login.php" method="post">
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="senha" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> Lembrar</label>
                    </div>
                </form>
            </div>


        </div>
    </main>

</body>
</html>