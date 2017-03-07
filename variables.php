<?php

$ageDuVisiteur = 20;
echo 'Le visiteur a ' . $ageDuVisiteur . ' ans .';
if ($ageDuVisiteur >= 18)
{
    echo "Le visiteur est majeur.";
}

$prix = 2.5;
$quantite = 10;
$total = $prix * $quantite;

echo 'Cela coute ' . $total . ' euros.';

?>