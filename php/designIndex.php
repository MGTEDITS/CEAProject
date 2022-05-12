<?php


if (isset($_SESSION['user'])){
  echo '<div class="collapse navbar-collapse" style="display: block" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          '.$_SESSION['user'].'
          <img style="width: 4rem; height: 4rem; border-radius: 100%; border-style: dashed;"  src="Images/logotipo.jpg" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><a class="dropdown-item" href="php/terminarsessao.php">Terminar Sessão</a></li>
          </ul>
        </li>
      </ul>
    </div>';

}
else{
    echo '<a type="button" href="login.php" class="text-decoration-none link-dark">Iniciar Sessão</a>
    <button type="button" class="btn btn-outline-dark"><a style="text-decoration: none; color: black" href="CriarConta.php">Criar Conta</a></button>';
}
