<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="formulaire.css">
<title>Formulaire php</title>

</head>
<body><h1>TRAITEMENT DE VOS DONNÉES :</h1>

<!-- recuperation du Formulaire  php -->
<?php

    // creation des variables


  $nom=$_POST['nom'];
  $message=$_POST['text'];
  $email=$_POST['mail'];

$str ="Nom : ".$nom."<br> mail : ".$email."<br> text : ".$message;

// mise en MAJ de la string
$str = strtoupper($str);


// imprimer le formulaire " façon obsolete"
// echo "<div class='div'> <p class='p1'/></p>".$str;


// Vérifie si la chaine ressemble à un email
if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
{
    strip_tags($str);
     echo "<div class='div'> " . "<p class='p2'/>IDENTIFIANT:" . strtoupper($nom);
     echo "<div class='div'> " . "<p class='p2'/>EMAIL :" . $email;
}

else {
    echo "votre email a un format non adapté.";
  };

// limite de caractère
if (strlen($nom)>20){
echo "votre nom doit faire moins de 20 caractère";
}

else{
echo   " <div class='div'> <p class='p1'> Heureux de vous voir   " . "". strtoupper($nom) . " </p> "  ;
}

if (strlen($email)>40){
  echo   " votre mail est trop long ?"  ;
}

else if (strlen($email)<40){
echo "<div class='div2'>congratulation, vous êtes log";
}

else{
echo "votre email est bien trop grand, reduisez le nombre de caractère";
}


if (strlen($message)>400){
echo "votre message doit faire moins de 400 caractère";
}

else{
  echo "<div class='div2'>votre message etait il : . $message";
};

?>

  </body>
  </html>
