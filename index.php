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

            <div class="col-md-2 text-end">
                <?php
                    include("php/designIndex.php")
                ?>

            </div>
        </header>
    </div>
</header>
<body>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="backgroud" class="d-inline-block w-100">
            <div class="carousel-caption text-start" style="  top: 15rem; left: 5rem">
                <h1>Projeto Rios</h1>
                <p class="w-50">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters,
                    as opposed to using 'Content here, content here', making it look like readable English.</p>

                 <button class="button-17" role="button">Entrar neste projeto</button>
            </div>
        </div>
        <div class="carousel-item">
            <img id="background1" class="d-block w-100">
            <div class="carousel-caption text-start" style="  top: 15rem; left: 5rem">
                <h1>Projeto Rios</h1>
                <p class="w-50">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters,
                    as opposed to using 'Content here, content here', making it look like readable English.</p>
                <button class="button-17" role="button">Entrar neste projeto</button>
            </div>
        </div>
        <div class="carousel-item">
            <img id="background2" class="d-block w-100">
            <div class="carousel-caption text-start" style="  top: 15rem; left: 5rem">
                <h1>Projeto Rios</h1>
                <p class="w-50">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters,
                    as opposed to using 'Content here, content here', making it look like readable English.</p>
                <button class="button-17" role="button">Entrar neste projeto</button>
            </div>

        </div>
    </div>
    <button style="width: 3rem; left: 40rem" class="carousel-caption bg-transparent border-0 " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button style="width: 3rem; left: 45rem" class="carousel-caption bg-transparent border-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


</body>

</html>