<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Sconto.php';

class Cuccia extends Prodotto
{
    use Sconto;

    public $immagine;
    public $nome;
    public $prezzo;

}



