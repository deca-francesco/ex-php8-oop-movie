<?php

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

                <?php foreach ($movies_array as $movie) { ?>
                    <div class='col'>
                        <div class='card h-100'>
                            <div class="card_top">
                                <img src='<?php echo $movie->poster ?>' alt='<?php echo $movie->titolo ?>' class="card-img-top">
                            </div>
                            <div class=" card_bottom p-3">
                                <h4> <?php echo $movie->titolo ?> </h4>
                                <div>Anno: <?php echo $movie->anno ?> </div>
                                <div>Regia: <?php echo $movie->regia ?> </div>
                                <div>Durata: <?php echo $movie->durata ?>' </div>
                                <!-- prendo l'array dei generi e lo implodo (tipo split in js) -->
                                <div>Genere: <?php echo implode("/", $movie->genere->getGenres()) ?> </div>
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