<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Projeto Rios</title>
        <link rel="stylesheet" href="inicio.css">

        <link rel="icon" type="image/x-icon" href="Images/logotipo.jpg" />

        <link href="css/styleing.css" rel="stylesheet" />
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

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">

                    <article>

                        <header class="mb-4">

                            <h1 class="fw-bolder mb-1">Rio Nome</h1>

                            <div class="text-muted fst-italic mb-2">Postado em 12 de Janeiro de 2022</div>

                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Projetos</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="">Peixes Nativos</a>
                        </header>

                        <figure  class="mb-4"><img style="width: 100%" class="img-fluid rounded" src="Images/termas-cucos-azenhas-torres-vedras-caminhando-4.jpg" alt="..." /></figure>

                        <section class="mb-5">
                            <h2 class="fw-bolder mb-4 mt-5">Um titulo</h2>
                            <p class="fs-5 mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                            <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                            <h2 class="fw-bolder mb-4 mt-5">Outro titulo</h2>
                            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                            <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                        </section>
                    </article>

                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">

                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>

                                <div class="d-flex mb-4">

                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Utilizador</div>
                                        Lorem Ipsum is a dummy text

                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Utilizador</div>
                                                     Lorem Ipsum is a dummy text
                                                </div>
                                        </div>

                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Utilizador</div>
                                                Lorem Ipsum is a dummy text
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Utilizador</div>
                                        Lorem Ipsum is a dummy text
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4">

                    <div class="card mb-4">
                        <div class="card-header">Pesquisa</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Escreva algo para pesquisar..." aria-label="Escreva algo para pesquisar..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Pesquisar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Categorias</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">texto</a></li>
                                        <li><a href="#!">texto</a></li>
                                        <li><a href="#!">texto</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">texto</a></li>
                                        <li><a href="#!">texto</a></li>
                                        <li><a href="#!">texto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Caixa para colocar alguma informação</div>
                        <div class="card-body">Colocar texto....</div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>
    </body>
</html>
