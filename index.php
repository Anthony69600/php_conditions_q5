<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

echo "Arme d'un opposant : $opponentWeapon" . '</br>';

switch ($opponentWeapon) {
    case ($opponentWeapon == $weapons[0]):
        $indyWeapon = 'gun';
        break;
    case ($opponentWeapon == $weapons[1]):
        $indyWeapon = 'first';
        break;
    case ($opponentWeapon == $weapons[2]):
        $indyWeapon = 'whip';
        break; 
    default:
        break; 
}

echo "Arme d'Indy est : $indyWeapon";

