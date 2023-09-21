<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $immagine;
    public $nome;
    public $prezzo;
    public $categoria;

    public function __construct($immagine, $nome, $prezzo, Categoria $categoria)
    {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;

        if (!is_numeric($prezzo)) {
            throw new Exception('Prezzo non valido');
        }
        return $prezzo;
    }
}
