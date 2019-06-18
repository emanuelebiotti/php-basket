<?php

function creaCodice(){

  $playercode = rand(100,999);
  return $playercode;
}

function generaRandom() {
  $randomNumber = rand(1,20);
  return $randomNumber;
}

function generaLettere() {
  $length = 3;

  $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
  return strtoupper($randomletter);
}

function stampagiocatore() {

  $giocatore = [

    'Codice' => generaLettere().creacodice(),
    'Punti'=>  generaRandom(),
    'Rimbalzi'=> generaRandom(),
    'Falli'=> generaRandom(),
    'Tiri da 2 punti' => generaRandom(),
    'Tiri da 3 punti' => generaRandom()

  ];


  foreach ($giocatore as $key => $value) {
    echo $key.':'.' '.$value.'<br>';
  }

}


 ?>
