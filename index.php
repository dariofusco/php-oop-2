<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Gioco.php';
require_once __DIR__ . '/Cuccia.php';


$prodotti = [
    new Cibo('https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg', 'Cibo per cani', 10, new Categoria('Cane'), 10),
    new Gioco('https://www.rioparty.it/32388-large_default/gioco-da-masticare-per-cani-spazzolino-in-gomma.jpg', 'Gioco per cani', 15, new Categoria('Cane'), 10),
    new Cuccia('https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_Chalet.jpg', 'Cuccia per cani', 30, new Categoria('Cane'), 10),
    new Cibo('https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'Cibo per gatti', 20, new Categoria('Gatto'), 10),
    new Gioco('https://www.tradeshopitalia.com/16651-large_default/gioco-per-gatto-gatti-asta-con-pupazzo-topo-topolino-palestra-tiragraffi-unghie.jpg', 'Gioco per gatti', 25, new Categoria('Gatto'), 10),
    new Cuccia('https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', 'Cuccia per gatti', '10', new Categoria('Gatto'), 10)
    ]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Shop</h1>
        <div class="row">
            <?php
            foreach ($prodotti as $prodotto) {
                $prodottoImmagine = $prodotto->immagine;
                $prodottoNome = $prodotto->nome;
                $prodottoPrezzo = $prodotto->prezzo;
                $prodottoCategoria = $prodotto->categoria->titolo;
                $prodottoSconto = $prodotto->sconto;

                echo "<div class=\"card\" style=\"width: 18rem;\">
                    <img src=\"$prodottoImmagine\" class=\"card-img-top\" alt=\"\">
                    <div class=\"card-body\">
                    <ul>
                    <li>Nome: $prodottoNome</li>
                    <li>Prezzo: $prodottoPrezzo €</li>
                    <li>Sconto: $prodottoSconto %</li>
                    <li>Categoria: $prodottoCategoria</li>
                    </ul>
                    </div>
                    </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>