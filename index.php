<?php

class Genre
{
    // attributi
    public $generiArray = [];

    // Costruttore
    function __construct($_generi)
    {
        // se il parametro passato è un array lo sovrascrivo all'array vuoto
        if (is_array($_generi)) {
            $this->generiArray = $_generi;
        } else {
            // altrimenti lo aggiungo direttamente all'array vuoto
            $this->generiArray[] = $_generi;
        }
    }

    // Metodo per aggiungere un genere
    public function addGenres($_generi)
    {
        // se il parametro passato è un array lo unisco all'array già esistente
        if (is_array($_generi)) {
            $this->generiArray = array_merge($this->generiArray, $_generi);
        } else {
            // altrimenti lo aggiungo direttamente all'array già esistente
            $this->generiArray[] = $_generi;
        }
    }
}



class Movie
{
    // attributi
    public $titolo;
    public $regia;
    public $anno;
    public $durata;
    public $genere;

    // costruttore
    function __construct($_titolo, $_regia, $_anno, $_durata, Genre $_genere)
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
        // Accedo all'array di generi e converto in stringa separati da virgola
        $generiString = implode(", ", $this->genere->generiArray);

        // Restituisco una stringa
        return "Titolo: $this->titolo<br> Regia: $this->regia<br> Anno: $this->anno<br> Durata: $this->durata minuti<br> Genere: $generiString.<br>";
    }

    // calcola quanti anni ha il film
    public function getAge()
    {
        $currentYear = date("Y");
        return $currentYear - $this->anno;
    }
}


// istanze
$theMask = new Movie("The Mask", "Chuck Russell", 1994, 101, new Genre(["Azione", "Commedia"]));
$pallottoleCinesi = new Movie("Pallottole Cinesi", "Tom Dey", 2000, 110, new Genre(["Azione", "Commedia", "Western"]));
$djangoUnchained = new Movie("Django Unchained", "Quentin Tarantino", 2012, 165, new Genre(["Western", "Drammatico"]));
$laMummia = new Movie("La Mummia", "Stephen Sommers", 1999, 124, new Genre(["Azione", "Fantasy"]));
$piratiDeiCaraibi = new Movie("Pirati dei Caraibi: La maledizione della prima luna", "Gore Verbinski", 2003, 143, new Genre(["Avventura", "Azione", "Fantasy"]));

// array di istanze
$movies_array = [$theMask, $pallottoleCinesi, $djangoUnchained, $laMummia, $piratiDeiCaraibi];


// var_dump($movies_array)

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
                    echo " Quest'anno ha {$movie->getAge()} anni";
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