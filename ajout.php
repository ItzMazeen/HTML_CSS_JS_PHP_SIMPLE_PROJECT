<?php
// connexion à la base
mysql_connect("localhost","root","") or die ("Impossible de se connecter");
mysql_select_db("centre") or die("Impossible de trouver la base");           
// recuperation des valeurs du formulaire
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Password = $_POST['Password'];
$mail = $_POST['mail'];
$action= $_POST['action'];
// insertion des valeurs dans la base
$query = " INSERT INTO client(Nom,Prenom,Password,mail,action) VALUES ('$Nom','$Prenom',$Password','$mail','$action')";$result=mysql_query($query);
mysql_close();
echo("Merci de votre inscription, vous avez recevoir un email pendant 24h");
?>
