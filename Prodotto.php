<?php

require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Sconto.php';

class Prodotto
{
    use Sconto;

    public $immagine;
    public $nome;
    public $prezzo;
    public $categoria;

    public function __construct($immagine, $nome, $prezzo, Categoria $categoria, $sconto)
    {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->setSconto($sconto);

        if (!is_numeric($prezzo)) {
            throw new Exception('Prezzo non valido');
        }
        return $prezzo;
    }
}
