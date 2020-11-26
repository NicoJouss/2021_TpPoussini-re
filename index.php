<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relevés Capteurs</title>
    </head>
    <body>
        <?php // Connection à la BDD
$dsn = 'mysql:host=localhost;dbname=poussiniere;port=80;charset=utf8';

$pdo = new PDO($dsn, 'Njo', 'Nicolas');

?>
        

        <img src="/home/nicolas/Images/logo.jpg" alt="" /> <!-- Image logo St felix -->
        <h6 align = right>Jousseaume <br>Nicolas <br> SN2</h6>
        <h1 align="center"> Relevés d'informations des capteurs de la poussinière </h1>

        <p> Bienvenue sur la page web de la poussinière ! Vous pouvez trouver ici toutes les informations transmises par les capteurs en temps réel et ainsi rester au courant de l'etait de vos poussins ou que vous soyez. </p>

        <p> La poussiniére est composée de 5 capteurs qui sont : <br> 
    <li> Capteur température de l'air </li>
    <li> Capteur température de l'eau </li>
    <li> Capteur du niveau d'eau</li>
    <li> Capteur du niveau de nourriture </li>
    <li> Capteur detecteur de présence </li>

    <br> Les valeures retournées par les capteurs sont en degrés pour les thermometres, en pourcentage pour les capteur de niveau et en binaire ( 1 pour présence d'intrue 0 pour pas de presence d'intrue) pour le detecteur de presence.
</p>


<?php
$query = $pdo->query("SELECT * FROM Capteur WHERE Nom ='Capteur température air'");
$resultat = $query->fetchAll();

print("<table border=\"1\">");
foreach ($resultat as $key => $variable) {
    print("<br>");
    print("<td>" . $resultat[$key]['ID'] . "</td>");
    print("<td>" . $resultat[$key]['Nom'] . "</td>");
    print("<td>" . $resultat[$key]['Relever'] . "</td>");
    print("<td>" . $resultat[$key]['date_relever'] . "</td>");
    print("<br>");
}

print("</table>");

if($resultat[$key]['Relever'] >30 )
{


    print ("<br> La température de l'air est bonne ");
      

}
else 
  

    print ("<br>  Attention ! La température est dangereusement basse !");


$query = $pdo->query("SELECT * FROM Capteur WHERE Nom ='Capteur température eau'");
$resultat = $query->fetchAll();

print("<table border=\"1\">");
foreach ($resultat as $key => $variable) {
    print("<br>");
    print("<td>" . $resultat[$key]['ID'] . "</td>");
    print("<td>" . $resultat[$key]['Nom'] . "</td>");
    print("<td>" . $resultat[$key]['Relever'] . "</td>");
    print("<td>" . $resultat[$key]['date_relever'] . "</td>");
    print("<br>");
}

print("</table>");

if($resultat[$key]['Relever'] >20 )
{
    print("<br>Attention la température de l'eau est trop élevée !");
}
else if($resultat[$key]['Relever'] < 15)
{
    print("<br>Attention la température de l'eau est trop basse !");
}
else
{
    print("<br>La température de l'eau est bonne.");
}

$query = $pdo->query("SELECT * FROM Capteur WHERE Nom ='Capteur détecteur de présence'");
$resultats = $query->fetchAll();

print("<table border=\"1\">");
foreach ($resultats as $key => $variable) {
    print("<br>");
    print("<td>" . $resultats[$key]['ID'] . "</td>");
    print("<td>" . $resultats[$key]['Nom'] . "</td>");
    print("<td>" . $resultats[$key]['Relever'] . "</td>");
    print("<td>" . $resultats[$key]['date_relever'] . "</td>");
    print("<br>");
}

print("</table>");

if ($resultats[$key]['Relever'] > 1 )
{
    print("Pas de danger.");
}
else
{
    print("Danger intrus dans l'enclot !");
}

?>



</body>
</html>
<input type="submit" value="" />
