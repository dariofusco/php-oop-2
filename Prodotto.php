<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto extends Categoria
{
    public $cibo;
    public $gioco;
    public $cuccia;

    public function __construct($cibo, $gioco, $cuccia)
    {
        $this->cibo = $cibo;
        $this->gioco = $gioco;
        $this->cuccia = $cuccia;
    }
}

$categoria->cani = new Prodotto('Scatoletta', 'Pallina', 'Casetta');
$categoria->gatti = new Prodotto('Scatoletta', 'Pallina', 'Casetta');

