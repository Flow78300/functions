<?php

function writeSecretSentence(String $animal, String $item): String
{
    return ucfirst(strtolower($animal)) . " s'incline face à " . strtolower($item) . PHP_EOL;
}

echo writeSecretSentence("Le loup", "la lune");
echo writeSecretSentence("La marsupilami", "le feu");
echo writeSecretSentence("Le chien", "la rivière");
