<?php
echo "<header><h1>Exercices PHP Fonctions</h1></header></br>";
ligne();
echo "------- exercice 1.1 -------" . '</br>';
ligne();

function saluer()
{
    echo "Bonjour et bienvenue<br>";
};


saluer();

ligne();
echo "------- exercice 1.2 -------" . '</br>';
ligne();

function ligne()
{
    echo "------------------------------<br>";
};

ligne();

ligne();
echo "------- exercice 2.1 -------" . '</br>';
ligne();

function direBonjour($prenom)
{
    echo "Bonjour, $prenom!<br>";
};

direBonjour("Sylvie");
direBonjour("Pierre");
direBonjour("Killian");

ligne();
echo "------- exercice 2.2 -------" . '</br>';
ligne();

function multiplier($a, $b)
{
    return $a * $b;
}

echo multiplier(3, 4) . "<br>";


ligne();
echo "------- exercice 3.1 -------" . '</br>';
ligne();

$valeur = rand(0, 15);

function carre($nombre)
{
    return  $nombre * $nombre;
}

echo  "Le carré de $valeur est :" . carre($valeur) . "<br>";

ligne();
echo "------- exercice 3.2 -------" . '</br>';
ligne();

$age = rand(0, 60);
function anneeNaissance($age)
{
    $anneeCourante = 2025;
    return $anneeCourante - $age;
}

echo "Si vous avez $age ans, vous êtes né(e) en " . anneeNaissance($age) . "<br>";

ligne();
echo "------- exercice 4.1 -------" . '</br>';
ligne();

function estMajeur($age)
{
    if ($age >= 18) {
        return true;
    } else if ($age < 18) {
        return false;
    }
}

if (estMajeur($age)) {
    echo "Vous êtes majeur.<br>";
} else {
    echo "Vous êtes mineur.<br>";
};

ligne();
echo "------- exercice 4.2 -------" . '</br>';
ligne();

function estPair($valeur)
{
    if ($valeur % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if (estPair($valeur)) {
    echo "Le nombre est pair.<br>";
} else {
    echo "Le nombre est impair.<br>";
}

ligne();
echo "------- exercice 5.1 -------" . '</br>';
ligne();

function presentation($prenom, $nom, $age)
{
    echo "Je m'appelle $prenom $nom et j'ai $age ans<br>";
};

presentation("Sébastien", "FOURNEST", 50);

ligne();
echo "------- exercice 5.2 -------" . '</br>';
ligne();

function calculer($a, $b)
{

    $operations = ['+', '-', '*', '/'];

    $operation = $operations[array_rand($operations)];

    $result = null;
    if ($operation == "+") {
        $result = $a + $b . "<br>";
        echo $result;
    } else if ($operation == "-") {
        $result = $a - $b . "<br>";
        echo $result;
    } else if ($operation == "*") {
        $result = $a * $b . "<br>";
        echo $result;
    } else if ($b != 0) {
        $result = $a / $b . "<br>";
        echo $result;
    } else {
        echo "Erreur : Division par zéro impossible.<br>";
    };
};

calculer(rand(-10, 50), rand(10, 50));

ligne();
echo "------- exercice 5.3 -------" . '</br>';
ligne();


function afficherLignes($n)
{
    if (!is_int($n) || $n <= 0) {
        echo "Erreur";
        return;
    }
    for ($i = 1; $i <= $n; $i++) {
        echo "Ligne " . $i . "\n<br>";
    }
};


afficherLignes(4);


?>