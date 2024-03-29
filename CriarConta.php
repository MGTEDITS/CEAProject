<!doctype html>
<html lang="en">
<head>
    <title>Criar Conta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Images/logotipo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<header>
    <div class="container">
        <header style="height: 16vh" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between ">
            <a href="index.php" class="d-flex align-items-center  text-dark text-decoration-none">
                <img style="width: 8rem" src="Images/output-onlinepngtools.png" alt="" class="bi me-2" role="img"
                     aria-label="Bootstrap"/>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 gap-5 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link fs-5 link-dark">Sobre Nós</a></li>
                <li><a href="#" class="nav-link px-2 fs-5 link-dark">Projetos</a></li>
                <li><a href="#" class="nav-link px-2  fs-5 link-dark">Marcações</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a type="button" style="margin-right: 1rem" href="login.php" class="text-decoration-none link-dark">Iniciar Sessão</a>
                <button type="button" class="btn btn-outline-dark"><a style="text-decoration: none; color: black" href="CriarConta.php">Criar Conta</a></button>
            </div>
        </header>
    </div>
</header>
<body class="img" style="background-image: url(Images/tree-swallow-6357383_1280-1.jpg);">
<form action="php/criarconta.php" method="post" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Criar Conta</h3>
                    <form action="php/criarconta.php" method="post" class="signin-form">
                        <div class="form-group">
                            <input name="txtusername" type="text" class="form-control" placeholder="Nome de Utilizador" required>
                        </div>
                        <div class="form-group">
                            <input name="txtemail" type="text" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <input name="txtpassword" id="password-field" type="password" class="form-control" placeholder="Palavra-Passe" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btncriarconta" class="form-control btn btn-primary submit px-3">Criar Conta</button>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Ou iniciar sessão com &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
