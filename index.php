<?php

// traits
require_once "./Traits/HasDirector.php";

// classi
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

// istanze
require_once "./db.php";


?>


<!doctype html>
<html lang="en">

<head>
    <title>PHP Movies</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous" defer></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous" defer></script>
</head>

<body class="bg-secondary">
    <header class="bg-dark text-white py-2">
        <div class="container">
            <h1>PHP Movies</h1>
        </div>
    </header>
    <main class="my-5">
        <div class="container">
            <div class="row row-cols-1 g-4">

                <?php foreach ($movies_array as $movie) { ?>
                    <div class='col'>
                        <div class='card'>
                            <div class="card-body d-flex">
                                <div class="w-50">
                                    <img src='<?php echo $movie->poster ?>' alt='<?php echo $movie->title ?>' class="img-fluid">
                                </div>
                                <div class="w-50">
                                    <h4 class="card-title"> <?php echo $movie->title ?> </h4>
                                    <p><strong>Anno: </strong><?php echo $movie->year ?> </p>
                                    <p><strong>Regia: </strong><?php echo $movie->getDirector() ?> </p>
                                    <p><strong>Durata: </strong><?php echo $movie->length ?>' </p>
                                    <p><strong>Genere: </strong><?php echo $movie->getGenreName() ?> </p>
                                    <p><strong>Descrizione genere: </strong><?php echo $movie->getGenreDescription() ?> </p>
                                    <p><strong>Sinossi: </strong><?php echo $movie->description ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </main>
    <footer>

    </footer>

</body>

</html>