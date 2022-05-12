<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rios</title>

        <link rel="icon" type="image/x-icon" href="Images/logotipo.jpg" />

        <link rel="stylesheet" href="inicio.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <link href="css/styles.css" rel="stylesheet" />
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
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Todos os Rios</h1>
                        <p class="lead fw-normal text-muted mb-0">Projeto Rios</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-3 mb-3" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="riodescricao.php">Nome do Rio</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-3 mb-3" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="riodescricao.php">Nome do Rio</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-5 mb-lg-0">
                                <img class="img-fluid rounded-3 mb-3" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="riodescricao.php">Nome do Rio</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <img class="img-fluid rounded-3 mb-3" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="riodescricao.php">Nome do Rio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>
    </body>
</html>
