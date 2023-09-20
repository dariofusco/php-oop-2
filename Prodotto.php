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

    /*public function getHTMLCard()
    {
        return "
        <div>
        <h2>$this->categoria</h2>
        <ul>
            <li>Cibo: $this->cibo</li>
            <li>Gioco: $this->gioco</li>
            <li>Cuccia: $this->cuccia</li>
        </ul>
        ";
    }*/
}

$cani = new Prodotto('Scatoletta', 'Osso', 'Casetta');
$gatti = new Prodotto('Croccantini', 'Pallina', 'Cuscino');
