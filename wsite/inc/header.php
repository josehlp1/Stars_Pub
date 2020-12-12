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
    <title>Star’s Pub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpeg" type="jpeg" sizes="16x16">
    <meta charset="utf-8">
</head>

<body>

    <header>
        <div class="topo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 header-empresa">
                        <img class="logo-top" src="img/logo.jpeg" />
                    </div>
                    <div class="col-sm-6 login-div header-empresa-login">
                        <?php if (!empty($_SESSION['email'])) { ?>    
                            <div class="user-logad" > <p>Bem Vindo <?php echo $_SESSION['name']; ?></p><a href="">Minha Conta |</a><a href="inc/scripts/logout.php"> Sair</a> </div>
                    </div>
                <?php } else { ?>
                    <div class="login">
                        <button class="btn-login" data-toggle="modal" data-target="#modalLRForm"> Acessar Conta <i class="fas fa-sign-in-alt"></i> </button>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>

        </div>
        </div>


        <!--Modal: Login / Register Form-->
        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a style=" color: rgb(248,149,0); " class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                    Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a style=" color: rgb(248,149,0); " class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1" style=" color: rgb(248,149,0); "></i>
                                    Criar Conta</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 7-->
                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body mb-1">
                                    <form action="inc/scripts/valida_login.php" method="POST">
                                        <div class="md-form form-sm mb-5" style=" margin-bottom: 1.5rem!important; ">

                                            <label data-error="wrong" data-success="right" for="modalLRInput10"><i class="fas fa-envelope prefix"></i> Email</label>
                                            <input name="email" type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                        </div>

                                        <div class="md-form form-sm mb-4">
                                            <label data-error="wrong" data-success="right" for="modalLRInput11"><i class="fas fa-lock prefix"></i> Senha</label>
                                            <input name="senha" type="password" id="modalLRInput11" class="form-control form-control-sm validate">

                                        </div>
                                        <div class="text-center mt-2">
                                            <button class="btn btn-info">Entrar <i class="fas fa-sign-in ml-1"></i></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!--/.Panel 7-->

                            <!--Panel 8-->
                            <div class="tab-pane fade" id="panel8" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body">
                                    <form action="inc/scripts/valida_register.php" method="POST">
                                        <div class="md-form form-sm mb-5" style=" margin-bottom: 1.5rem!important; ">
                                            <label data-error="wrong" data-success="right" for="modalLRInput12"><i class="fas fa-user mr-1"></i></i> Nome</label>
                                            <input type="text" id="modalLRInput12" name="name" class="form-control form-control-sm validate">
                                        </div>

                                        <div class="md-form form-sm mb-5" style=" margin-bottom: 1.5rem!important; ">
                                            <label data-error="wrong" data-success="right" for="modalLRInput12"><i class="fas fa-envelope prefix"></i> Email</label>
                                            <input type="email" id="modalLRInput12" name="email" class="form-control form-control-sm validate">
                                        </div>

                                        <div class="md-form form-sm mb-5" style=" margin-bottom: 1.5rem!important; ">
                                            <label data-error="wrong" data-success="right" for="modalLRInput13"> <i class="fas fa-lock prefix"></i> Senha</label>
                                            <input type="password" id="modalLRInput13" name="senha" class="form-control form-control-sm validate">
                                        </div>

                                        <div class="md-form form-sm mb-4">
                                            <label data-error="wrong" data-success="right" for="modalLRInput14"><i class="fas fa-lock prefix"></i> Repita sua senha</label>
                                            <input type="password" id="modalLRInput14" name="senha_repetida" class="form-control form-control-sm validate">
                                        </div>

                                        <div class="text-center form-sm mt-2">
                                            <button type="submit" class="btn btn-info">Registrar<i class="fas fa-sign-in ml-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/.Panel 8-->
                        </div>

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Login / Register Form-->
    </header>