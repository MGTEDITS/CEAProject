<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>

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
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <h1 class="fw-bolder">Projeto Rios</h1>
                                <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab similique, ducimus ut alias sit accusamus illum, asperiores deserunt dolorum quaerat qui! Ab, quisquam explicabo magni dolores unde beatae quam a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-12"><img class="img-fluid rounded-3 mb-5" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." /></div>
                        <div class="col-lg-6"><img class="img-fluid rounded-3 mb-5" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." /></div>
                        <div class="col-lg-6"><img class="img-fluid rounded-3 mb-5" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." /></div>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <p class="lead fw-normal text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt architecto enim eos accusantium fugit recusandae illo iste dignissimos possimus facere ducimus odit voluptatibus exercitationem, ex laudantium illum voluptatum corporis.</p>
                                <a class="text-decoration-none" href="rios.php">
                                    Ver Projeto
                                    <i class="bi-arrow-right"></i>
                                </a>
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
