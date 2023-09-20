<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto extends Categoria
{
    public $cibo;
    public $gioco;
    public $cuccia;

    public function __construct($cibo, $gioco, $cuccia, $categoria)
    {
        $this->cibo = $cibo;
        $this->gioco = $gioco;
        $this->cuccia = $cuccia;
        $this->categoria = $categoria;
    }
}

$prodotto1 = new Prodotto('Scatoletta', 'Osso', 'Casetta', $cani);
$prodotto2 = new Prodotto('Croccantini', 'Pallina', 'Cuscino', $gatti);
