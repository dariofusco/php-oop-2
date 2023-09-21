<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';

$cani = new Categoria('Cane');
$gatti = new Categoria('Gatto');

$prodotti = [
    new Prodotto('Scatoletta', 'Osso', 'Casetta', $cani),
    new Prodotto('Croccantini', 'Pallina', 'Cuscino', $gatti)
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
        $prodottoCibo = $prodotto->cibo;
        $prodottoGioco = $prodotto->gioco;
        $prodottoCuccia = $prodotto->cuccia;
        $prodottoCategoria = $prodotto->categoria->titolo;

        var_dump($prodotti);

        echo "<ul>
        <li>$prodottoCategoria</li>
        <li>$prodottoCibo</li>
        <li>$prodottoGioco</li>
        <li>$prodottoCuccia</li>
        </ul>";
    }
    ?>
</body>

</html>