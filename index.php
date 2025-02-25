<?php

class Movie
{
    // attributi
    public $titolo;
    public $regia;
    public $anno;
    public $durata;
    public $genere;

    // costruttore
    function __construct($_titolo, $_regia, $_anno, $_durata, $_genere)
    {
        $this->titolo = $_titolo;
        $this->regia = $_regia;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->genere = $_genere;
    }

    // metodi

    // restituisce i dati del film
    public function getInfo()
    {
        return "Titolo: $this->titolo, Regia: $this->regia, Anno: $this->anno, Durata: $this->durata minuti, Genere: $this->genere.";
    }

    // calcola quanti anni ha il film
    public function getAge()
    {
        $currentYear = date("Y");
        return $currentYear - $this->anno;
    }
}


// istanze
$theMask = new Movie("The Mask", "Chuck Russell", 1994, 101, "Azione/Commedia");
$pallottoleCinesi = new Movie("Pallottole Cinesi", "Tom Dey", 2000, 110, "Azione/Western");
$djangoUnchained = new Movie("Django Unchained", "Quentin Tarantino", 2012, 165, "Western/Drammatico");
$laMummia = new Movie("La Mummia", "Stephen Sommers", 1999, 124, "Azione/Fantasy");
$piratiDeiCaraibi = new Movie("Pirati dei Caraibi: La maledizione della prima luna", "Gore Verbinski", 2003, 143, "Avventura/Azione/Fantasy");

// array di istanze
$movies_array = [$theMask, $pallottoleCinesi, $djangoUnchained, $laMummia, $piratiDeiCaraibi];

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

<body>
    <header>
        <div class="container">
            <h1>PHP Movies</h1>
        </div>
    </header>
    <main>

        <div class="container">

            <div class="row row-cols-2 g-4">
                <?php

                // stampo in pagina
                foreach ($movies_array as $movie) {
                    echo "<div class='col'>";
                    echo $movie->getInfo();
                    echo "</div>";
                }

                ?>

            </div>
        </div>

    </main>
    <footer>

    </footer>

</body>

</html>