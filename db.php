<?php

// istanzio i generi con nome e descrizione
$action = new Genre("Azione", "Film caratterizzati da ritmo serrato, scene spettacolari, combattimenti e inseguimenti. Spesso protagonisti eroi determinati a superare ostacoli e nemici con forza e astuzia.");
$comedy = new Genre("Commedia", "Pellicole leggere e divertenti, basate su situazioni comiche, equivoci e battute brillanti. L'obiettivo è far ridere e intrattenere, spesso con una critica sociale sottile.");
$western = new Genre("Western", "Ambientati nel selvaggio West, raccontano storie di cowboy, sceriffi e fuorilegge tra duelli, viaggi epici e il confronto tra civiltà e natura selvaggia.");
$drama = new Genre("Drama", "Film emotivamente intensi che esplorano tematiche profonde come amore, perdita, conflitti personali e sociali, mettendo in scena la complessità dell'animo umano.");
$fantasy = new Genre("Fantasy", " Storie ambientate in mondi immaginari o con elementi soprannaturali, tra magie, creature leggendarie ed eroi in cerca di avventure epiche.");

// array di istanze dei film
$movies_array = [

    $theMask = new Movie("The Mask", 1994, 101, $comedy, "https://xl.movieposterdb.com/08_11/1994/110475/xl_110475_1b7b7311.jpg"),
    $pallottoleCinesi = new Movie("Pallottole Cinesi", 2000, 110, $action, "https://xl.movieposterdb.com/13_05/2000/184894/xl_184894_28971339.jpg"),
    $djangoUnchained = new Movie("Django Unchained", 2012, 165, $western, "https://xl.movieposterdb.com/20_09/2012/1853728/xl_1853728_66917887.jpg"),
    $laMummia = new Movie("La Mummia", 1999, 124, $action, "https://xl.movieposterdb.com/05_08/1999/0120616/xl_42886_0120616_00597fdf.jpg"),
    $piratiDeiCaraibi = new Movie("Pirati dei Caraibi: La maledizione della prima luna", 2003, 143, $fantasy, "https://xl.movieposterdb.com/13_05/2003/325980/xl_325980_395fe49b.jpg")

];

// imposto le descrizioni dei film (public)
$theMask->description = "Stanley Ipkiss (Jim Carrey) è un timido e sfortunato impiegato di banca con una vita piuttosto ordinaria. Tutto cambia quando trova una misteriosa maschera antica legata al dio nordico Loki. Quando la indossa, si trasforma in The Mask, un personaggio esuberante, imprevedibile e dotato di poteri soprannaturali che gli permettono di deformare la realtà come in un cartone animato. Approfittando delle sue nuove abilità, Stanley si gode la vita, si vendica dei suoi nemici e cerca di conquistare la bella cantante Tina Carlyle (Cameron Diaz). Tuttavia, il boss del crimine Dorian Tyrell (Peter Greene) vuole impossessarsi della maschera per i suoi scopi malvagi, portando a una serie di avventure frenetiche e battaglie surreali. Con il suo mix di comicità slapstick, effetti speciali innovativi e l'inconfondibile energia di Jim Carrey, The Mask è diventato un cult degli anni '90.";
$pallottoleCinesi->description = "Chon Wang (Jackie Chan) è una guardia imperiale cinese che si ritrova catapultato nel selvaggio West quando la principessa Pei Pei (Lucy Liu) viene rapita e portata in America. Deciso a salvarla, Chon parte per gli Stati Uniti, dove si scontra con le difficoltà di un mondo a lui sconosciuto. Lungo il cammino, incontra Roy O'Bannon (Owen Wilson), un fuorilegge goffo e poco talentuoso, che diventa suo improbabile alleato. Tra duelli, inseguimenti e situazioni comiche, i due sviluppano una bizzarra amicizia e affrontano banditi, sceriffi corrotti e tradimenti per portare a termine la loro missione. Con un mix esplosivo di arti marziali, comicità e avventura western, Pallottole Cinesi offre un'originale rivisitazione del genere, grazie alla chimica tra Jackie Chan e Owen Wilson.";
$djangoUnchained->description = "Ambientato nel Sud degli Stati Uniti due anni prima della Guerra Civile, il film segue Django (Jamie Foxx), uno schiavo liberato dal carismatico cacciatore di taglie tedesco, il dottor King Schultz (Christoph Waltz). Schultz ha bisogno di Django per identificare alcuni criminali e, in cambio, gli offre la libertà e l'opportunità di imparare il mestiere. Django dimostra un talento naturale per la caccia agli uomini, ma il suo vero obiettivo è ritrovare e salvare sua moglie Broomhilda (Kerry Washington), venduta come schiava al crudele proprietario di una piantagione, Calvin Candie (Leonardo DiCaprio). Insieme, Django e Schultz mettono in atto un piano per infiltrarsi nella piantagione di Candie, Candyland, ma dovranno affrontare non solo il sadico Candie, ma anche il subdolo e sospettoso maggiordomo Stephen (Samuel L. Jackson). Con il suo stile inconfondibile, Quentin Tarantino mescola western, azione e humor nero in un racconto crudo di vendetta e libertà, impreziosito da dialoghi taglienti e sequenze spettacolari.";
$laMummia->description = "Nel 1926, l'avventuriero Rick O'Connell (Brendan Fraser) guida la coraggiosa egittologa Evelyn Carnahan (Rachel Weisz) e suo fratello Jonathan (John Hannah) in una spedizione nella leggendaria città perduta di Hamunaptra. Tuttavia, risvegliando accidentalmente la mummia maledetta del sacerdote Imhotep (Arnold Vosloo), il gruppo scatena un'antica maledizione che minaccia di distruggere il mondo. Imhotep, dotato di poteri sovrannaturali, inizia a rigenerarsi e a scatenare il caos, deciso a riportare in vita la sua amata Anck-Su-Namun. Mentre il terrore si diffonde, Rick, Evelyn e Jonathan devono trovare un modo per fermarlo prima che sia troppo tardi, affrontando mummie, scarabei assassini e forze oscure in un'avventura epica tra azione, mistero e umorismo. Con il suo mix di avventura alla Indiana Jones, effetti speciali spettacolari e il carisma di Brendan Fraser, La Mummia è diventato un cult degli anni '90.";
$piratiDeiCaraibi->description = "Nel Mar dei Caraibi del XVIII secolo, il capitano pirata Jack Sparrow (Johnny Depp) arriva a Port Royal con l'intento di recuperare la sua nave, la Perla Nera, rubatagli dal perfido capitano Hector Barbossa (Geoffrey Rush). Nella stessa città, la giovane Elizabeth Swann (Keira Knightley), figlia del governatore, viene rapita dai pirati della Perla Nera, che la credono la chiave per spezzare una terribile maledizione che li ha resi immortali. Il fabbro Will Turner (Orlando Bloom), innamorato di Elizabeth, si allea con Jack per salvarla e recuperare il medaglione d'oro azteco che lei porta con sé, l'elemento chiave per spezzare la maledizione. Tra duelli spettacolari, inseguimenti mozzafiato e colpi di scena, la missione si trasforma in un'epica avventura ricca di magia, humor e battaglie navali. Con il suo mix di azione, avventura e ironia, Pirati dei Caraibi: La Maledizione della Prima Luna ha dato nuova vita al genere piratesco, rendendo il personaggio di Jack Sparrow una vera icona del cinema.";

// imposto i registi (protected) con il metodo che invece è public
$theMask->setDirector("Chuck Russell");
$pallottoleCinesi->setDirector("Tom Dey");
$djangoUnchained->setDirector("Quentin Tarantino");
$laMummia->setDirector("Stephen Sommers");
$piratiDeiCaraibi->setDirector("Gore Verbinski");


// var_dump($movies_array)