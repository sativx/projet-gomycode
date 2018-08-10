<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$mat=$_POST['mat'];
$mar=$_POST['mar'];

$req="update voiture
		set mar='$mar'
		where mat='$mat';";
$result=mysql_query($req) or die ("Probleme de requete update ");
	if ($result==true){
	echo("<h1>La modification de la marque est faite avec succes est faite avec succes</h1>");
	}

?>