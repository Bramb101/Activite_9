<?php

$nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$cartes = ["♦", "♥", "♣", "♠"];
$deck = [];
$subDeck1 = [];
$subDeck2 = [];
$shuffleDeck = [];

for ($i=0; $i<count($cartes);$i++){
    for ($j=0; $j<count($nombres); $j++){
        $deck[] = $nombres[$j].$cartes[$i];
    }
}

for ($i=0;$i<26;$i++){
    $subDeck1[$i] = $deck[$i];
    $subDeck2[$i] = $deck[$i+26];
}

for ($i=0; $i<26 ; $i++) {
    $shuffleDeck[] = $subDeck1[$i];
    $shuffleDeck[] = $subDeck2[$i];
}

for ($i=0; $i<52; $i++){
    echo $shuffleDeck[$i]." ";
    if (($i+1)%13==0){
    echo "</br>";
    }
}
?>