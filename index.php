<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Centro Educacional Ambiental</title>
    <link rel="stylesheet" href="inicio.css">
    <link rel="icon" href="Images/logotipo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header>
    <div class="container">
        <header style="height: 16vh" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between ">
            <a href="index.php" class="d-flex align-items-center  text-dark text-decoration-none">
                <img style="width: 8rem" src="Images/logotipo.jpg" alt="" class="bi me-2" role="img"
                     aria-label="Bootstrap"/>
            </a>

            <?php
            include("php/cargoget.php")
            ?>

            <div class="col-md-3 text-end">
                <?php
                    include("php/designIndex.php")
                ?>

            </div>
        </header>
    </div>
</header>
<body>
<link rel="stylesheet" href="../WebSite/css/owl.carousel.min.css">
<link rel="stylesheet" href="../WebSite/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="../WebSite/css/style.css">
<div  class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image:url(images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>Projeto:</h2>
                        <h1 class="mb-3">Rios</h1>
                        <button class="button-33" id="btnir1" role="button">Sobre este Projeto</button>
                        <script type="text/javascript">
                            document.getElementById("btnir1").onclick = function () {
                                location.href = "projetorioscapa.php";
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(images/maxresdefault.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>Projeto:</h2>
                        <h1 class="mb-3">Peixes Nativos</h1>
                        <button class="button-33" id="btnir2" role="button">Sobre este Projeto</button>
                        <script type="text/javascript">
                            document.getElementById("btnir2").onclick = function () {
                                location.href = "projetopeixesnativos.php";
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(images/centro-educacao-ambiental-696x466.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>Projeto:</h2>
                        <h1 class="mb-3">Nome</h1>
                        <button class="button-33" id="btnir2" role="button">Sobre este Projeto</button>
                        <script type="text/javascript">
                            document.getElementById("btnir2").onclick = function () {
                                location.href = "projetopeixesnativos.php";
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>




</body>

</html>
