<?php

session_start();

if (isset($_SESSION['user'])){
    echo '<p style="margin-right: 1rem">' . $_SESSION["user"]. '
   <img style="width: 4rem; border-radius: 100%; border-style: dashed;"  src="Images/logotipo.jpg" alt="" />
   </p>';

}
else{
    echo '<a type="button" href="login.php" class="text-decoration-none link-dark">Iniciar Sessão</a>
    <button type="button" class="btn btn-outline-dark"><a style="text-decoration: none; color: black" href="CriarConta.php">Criar Conta</a></button>';
}

session_destroy();