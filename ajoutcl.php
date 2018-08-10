<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$ncin=$_POST['ncin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$adr=$_POST['adr'];
$req="insert into client
		values ('$ncin','$nom','$prenom','$tel','$adr');";
$result=mysql_query($req) or die ("Probleme de requete");
	if ($result==true){
	echo("<h1>L ajout est fait avec succes</h1>");
	}

?>