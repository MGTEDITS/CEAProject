<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcea";

$next = false;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if (isset($_SESSION["user"])){

    $sql = "SELECT cargo FROM utilizadores WHERE username = '" .$_SESSION["user"]. "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            if ($row['cargo'] == "Administrador"){
                echo '<ul style="right: 10rem" class="nav col-12 col-md-auto mb-2 gap-5 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link fs-5 link-dark">Sobre Nós</a></li>
                 <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link fs-5 link-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projetos
          </a>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="projetorioscapa.php">Projeto Rios</a></li>
            <li><a class="dropdown-item" href="projetopeixesnativos.php">Peixes Nativos</a></li>
          </ul>
        </li>
      </ul>
                <li><a href="#" class="nav-link px-2  fs-5 link-dark">Utilizadores</a></li>
            </ul>';
            }else{
                echo '<ul style="right: 10rem" class="nav col-12 col-md-auto mb-2 gap-5 justify-content-center mb-md-0">
                             <li><a href="#" class="nav-link fs-5 link-dark">Sobre Nós</a></li>
                              <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link fs-5 link-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projetos
          </a>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="projetorioscapa.php">Projeto Rios</a></li>
            <li><a class="dropdown-item" href="projetopeixesnativos.php">Peixes Nativos</a></li>
          </ul>
        </li>
      </ul>
                             <li><a href="#" class="nav-link px-2  fs-5 link-dark">Marcações</a></li>
                      </ul>';
            }
        }
    }
    $conn->close();
}
else{
    echo '<ul style="right: 10rem" class="nav col-12 col-md-auto mb-2 gap-5 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link fs-5 link-dark">Sobre Nós</a></li>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link fs-5 link-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projetos
          </a>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="projetorioscapa.php">Projeto Rios</a></li>
            <li><a class="dropdown-item" href="projetopeixesnativos.php">Peixes Nativos</a></li>
          </ul>
        </li>
      </ul>
                <li><a href="#" class="nav-link px-2  fs-5 link-dark">Marcações</a></li>
        </ul>';
}


