<?php

// array di istanze
$movies_array = [
    // istanze
    $theMask = new Movie("The Mask", "Chuck Russell", 1994, 101, new Genre(["Azione", "Commedia"]), "https://xl.movieposterdb.com/08_11/1994/110475/xl_110475_1b7b7311.jpg"),
    $pallottoleCinesi = new Movie("Pallottole Cinesi", "Tom Dey", 2000, 110, new Genre(["Azione", "Commedia", "Western"]), "https://xl.movieposterdb.com/13_05/2000/184894/xl_184894_28971339.jpg"),
    $djangoUnchained = new Movie("Django Unchained", "Quentin Tarantino", 2012, 165, new Genre(["Western", "Drammatico"]), "https://xl.movieposterdb.com/20_09/2012/1853728/xl_1853728_66917887.jpg"),
    $laMummia = new Movie("La Mummia", "Stephen Sommers", 1999, 124, new Genre(["Azione", "Fantasy"]), "https://xl.movieposterdb.com/05_08/1999/0120616/xl_42886_0120616_00597fdf.jpg"),
    $piratiDeiCaraibi = new Movie("Pirati dei Caraibi: La maledizione della prima luna", "Gore Verbinski", 2003, 143, new Genre(["Avventura", "Azione", "Fantasy"]), "https://xl.movieposterdb.com/13_05/2003/325980/xl_325980_395fe49b.jpg")

];

// var_dump($movies_array)