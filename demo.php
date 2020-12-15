<?php
/*
//Déclaration de variables
$prenom = 'Jonathan';
$nom = 'Cindano';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1+$note2)/2;

echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . (($note1+$note2)/2) . ' de moyenne';
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne";
//Bonjour Cindano Jonathan vous avez 15 de moyenne



$notes = [10, 20, 10, 9, 8, 'eleve'];

$eleve = ['Marc', 'Doe', [10, 20, 40]];

$eleve = [
    'nom' => 'Doe', 
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
$eleve[] = 'CM2-A';
$eleve['prenom'] ='Jonathan';
$eleve['notes'][3] = 16;
//echo $eleve['prenom']. ' ' . $eleve['nom'];
print_r($eleve);


$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16,16, 16]
    ],
    [
        'nom' => 'Joe',
        'prenom' => 'Jane',
        'notes' => [12, 15, 17]
    ]
    ];


echo $classe[1]['notes'][1];


$note =  readline('Entrez votre note : ');
if ($note >= 10){
    if ($note == 10) {
        echo 'Vous avez juste la moyenne';
    } else {
        echo 'Bravo vous avez la moyenne';
    }
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

//OR

$note = (int)readline('Entrez votre note : ');
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
} elseif ($note === 10){
    echo 'Vous avez juste la moyenne';
}
else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

$action = (int)readline('Entrez votre note : (1: attaquer, 2: défendre, 3: passer mon tour)');

switch ($action) {
    case 1:
        echo'J\'attaque';
    break;
    case 2:
        echo 'Je défends';
    break;
    case 3:
        echo 'Je ne fais rien';
    break;
    default:
    echo 'Commande inconnue';
}

if ($action === 1) {
    echo 'J\'attaque !';
} elseif($action === 2) {
    echo 'Je défends';
} elseif ($action === 3) {
    echo 'Je ne fais rien';
} else {
    echo 'Commande inconue';
}

$heure =(int)readline('Entrez une heure : ');

if (($heure < 9 || $heure > 12) && (14 > $heure || $heure > 17)) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera fermé';
}


$chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez une valeur : ');
}

echo 'Bravo vous avez gagné !'



for ($i = 0; $i < 10; $i+=2) {
    echo "- $i \n";
}



$notes = [10, 15, 16];

for ($i=0; $i < 3; $i++) {
    echo '- '.$notes[$i]."\n";
}

 
$notes = [10, 15, 16];


$eleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach($listEleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
}
foreach ($notes as $note) {
    echo "- $note \n";
} */

/*
La classe CM2:
- Jean
- Marc

La classe CM1:
-Emilie

*/
/*
Demande à l'utilisateur de rentrer une note ou de taper 'fin'
chaque note est sauvegardé dans un tableau $notes[]
à la fin on affiche le tableau de note sous forme de liste

$notes = [];
$note = (int)readline("Rentrez une note ou tapez 'fin' :  ");
array_push($notes, $note);
while ($note !== 0){
    $note = (int)readline("Rentrez une note ou tapez 'fin' :  ");
    array_push($notes, $note);
}
foreach ($notes as $not){
    echo '- '.$not ."\n";
}

//Correction

$notes = [];
$action = null;
//Tant que l'utilisateur ne tape pas "fin"
while ($action !== 'fin') {
    $action = readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie : ');
    // On ajoute la note au tableau note
    if ($action !== 'fin'){
        $notes[] = (int)$action;
    }
}
//Pour chaque note dans notes
foreach ($notes as $note){
   //On affiche "- note"
    echo "- $note \n";
}

//OU

$notes = [];
while (true) {
    $action = readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie : ');
    if ($action === 'fin'){
        break;
    } else{
        $notes[] = (int)$action;
    }
}

On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert


$ouverture = (int)readline("Heure d'ouverture : ");
$fermeture = (int)readline("Heure de fermeture : ");

$heure = (int)readline('Heure : ');

if (($heure > $ouverture) && ($heure<$fermeture)){
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}

*/
//On demande à l'user de rentrer un creneaux
    //On demande l'heure de début
    //On demande l'heure de fin
    //On verifie que l'heure de début < l'heure de fin
    //On de mande si on veut rajouter un nouveau creneaux (o/n)
//On demande à l'user de rentrer une heure
//On affiche l'état d'ouverture du magasin
/*$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int) readline('Heure de fermeture : ');
    if ($debut >= $fin){
        echo "Le créneaux ne peut pas être enregistré car l\'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Voulez-vous enregistrer un nouveau créneau ?(o/n)");
        if ($action === 'n'){
            break;
        }
    }
}

$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ? ");
$creneauTrouve = false;

foreach($creneaux as $creneau){
    if ($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve){
    echo 'Le magasin sera ouvert';
} else {
    'Désolé, le magasin sera fermé';
}


//Le magasin est ouvert de 14h à 18h et de 9h à 12h
echo "Le magasin est ouvert de";
foreach($creneaux as $k => $creneau){
    if ($k > 0){
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

// Demander un mot à notre user
$mot = strtolower((string)readline("Entrez un mot pour vérifier s'il est palyndrome : "));
//L'ordinateur vérifiee s'il est palyndrome
$reverse = strrev($mot);
if ($reverse === $mot){
    echo "C'est un mot palyndrome";
} else  {
    echo "Ce n'est pas un mot palydrome";
}

$notes = [10, 20, 13];
$sum = array_sum($notes);
$moy = round($sum/count($notes), 3);
echo "La moyenne est : $moy";

$notes = [10, 20, 13];
array_push($notes, 16, 17);
$noteReversed = array_reverse($notes);
print_r($notes);
print_r($noteReversed);

$notes = [10, 20, 13];
$notes2 = $notes;
$notes2[] = 10;
var_dump($notes, $notes2);


while (true) {
    $mot = readline("Entrez votre mot : ");
    if ($mot === ''){
        exit('Fin du programme');
    }
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse){
        echo "Ce mot est bien un palydrôme \n";
    } else {
        echo "Ce mot n'est pas un palydrôme \n";
    }
}

$insultes =['merde', 'con'];
//Demander à user de rentrer la phrase
$phrase = readline('Entrez une phrase : ');
//mettre tout en minuscule
$minPhrase = strtolower($phrase);
echo "$minPhrase";
//Si la phrase contient une des insultes du tableau, la remplacer avec **** par exemple
foreach ($insultes as $insulte) {
    if ((str_contains($minPhrase, $insulte[0])) || (str_contains($minPhrase, $insulte[1]))){
        echo 'True';
    } else {
        echo 'False';
    }
}

$insultes =['merde', 'con'];
$asterisque = [];
foreach ($insultes as $insulte){
    $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);

foreach ($insultes as $insulte) {
    $replace = str_repeat('*', strlen($insulte));
    $phrase = str_replace($insulte, $replace, $phrase);
}
echo $phrase;

$nom = 'Doe';
function bonjour ($prenom = null) {
    global $nom;
    if ($prenom === null) {
        return "Bonjour\n";
    }
    return 'Bonjour ' . $prenom . " ". $nom . "\n";
}

echo bonjour('Jean');


function repondre_oui_non() {
    $text = readline('Voulez vous continuer ? (o/n) :');
    while (true) {
        if ($text === 'o'){
            return true;
        } elseif ($text === 'n') {
            return false;
        } else {
            repondre_oui_non();
        }
    }
}
echo var_dump(repondre_oui_non());
//OU


function repondre_oui_non($phrase) {
    while (true) {
        $reponse = readline($phrase . " - (o)ui /(n)on : ");
        if ($reponse === 'o'){
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
}

function demander_creneau1(){
    $var = []; 
    $heuredebut = (int)readline("Heure de début : ");
    $heurefin = (int)readline("Heure de fin : ");
    if ($heuredebut < $heurefin) {
        $var[0] = $heuredebut;
        $var[1] = $heurefin;
        return $var;
    }
    return "Le créneau n'est pas bon";  
}

//$resultat = repondre_oui_non('Voulez vous continuer ? ');
*/

function demander_creneau($phrase = 'Veuillez entre un créneau'){
    echo $phrase . "\n";
    while (true){
        $ouverture = (int)readline("Heure d'ouverture : ");
        if ($ouverture >= 0 && $ouverture <= 23){
            break;
        }
    }
    while (true){
        $fermeture = (int)readline("Heure de fermeture : ");
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
            break;
        }
    }
    return [$ouverture, $fermeture];
}
/*
$creneau = demander_creneau(); //[8, 9]
$creneau2 = demander_creneau('Veuillez entrer votre créneau');
//Si l'user tape 'o' on renvoie true;
//Si l'user tape 'n' on renvoie false;
//Sinon on contine de lui demander;
var_dump($creneau, $creneau2);
*/
/**
 * [
 *  [0, 19],
 *  [2, 18]
 * ]
 */
$creneaux = demander_creneaux('Entrez vos créneaux');{
    
    demander_creneau();
    $continuer = readline("Voulez-vous continuer ? ");
}
var_dump($creneaux);






?>