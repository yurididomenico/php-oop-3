<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../trait/anno.php';



class Libro extends Prodotto
{
  public $pagine;
  public $copertina;


  //trait
  use Anno;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Int $pagine,
    String $copertina,
    Int $anno
    )
    {
    $this->pagine = $pagine;
    $this->copertina = $copertina;
    $this->anno = $anno;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}

?>