<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Gioco.php';
require_once __DIR__ . '/Cuccia.php';

$prodotti = [
    new Cibo('Immagine', 'Nome', 'Prezzo', new Categoria('Cane')),
    new Gioco('Immagine', 'Nome', 'Prezzo', new Categoria('Cane')),
    new Cuccia('Immagine', 'Nome', 'Prezzo', new Categoria('Cane')),
    new Cibo('Immagine', 'Nome', 'Prezzo', new Categoria('Gatto')),
    new Gioco('Immagine', 'Nome', 'Prezzo', new Categoria('Gatto')),
    new Cuccia('Immagine', 'Nome', 'Prezzo', new Categoria('Gatto'))
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($prodotti as $prodotto) {
        $prodottoImmagine = $prodotto->immagine;
        $prodottoNome = $prodotto->nome;
        $prodottoPrezzo = $prodotto->prezzo;
        $prodottoCategoria = $prodotto->categoria->titolo;

        var_dump($prodotti);

        echo "<ul>
        <li>$prodottoImmagine</li>
        <li>$prodottoNome</li>
        <li>$prodottoPrezzo</li>
        <li>$prodottoCategoria</li>
        </ul>";
    }
    ?>
</body>

</html>