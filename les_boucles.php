<?php
/*
$notes = [];

while(true){
    $action = readline("entrer une note ou taper ('fin') pour terminer le processus: ");
        if($action === 'fin'){
            break;
        }else{
            $notes[] = (int)$action;
        }
        
}
foreach($notes as $note){
    echo $note . "\n";
}
*/

// on veut demander a l'utilisateur de rentrer les horaires d'ouverture d'un magasin
// on demande a l'utilisateur de renter une heure et on lui dira si le magasin est ouvert ou ferme

$creneaux = [];

while(true){
    $debut = (int)readline("veuillez entrer l'heure de debut: ");
    $fin = (int)readline("veuillez entre l'heure de fin: ");
    if($debut >= $fin){
        echo "desole \n";
    }else{
        $creneaux[] = [$debut, $fin];
        $action = readline("voulez vous entrer un nouveau creneau ? (o/n)");
        if($action === 'n'){
            break;
        }
    }
}

echo "le magasin est ouvert de";
foreach($creneaux as $k => $creneau){
    if($k > 0){
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

/*

$heure = (int)readline("a quelle heure voulez vous visiter le magasin ");
$creneautrouve = false;

foreach($creneaux as $creneau){
    if($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneautrouve = true;
        break;
    }
}

if($creneautrouve){
    echo "le magasin est ouvert";
}else{
    echo "le magasin est ferme";
}

*/