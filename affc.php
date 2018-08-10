<!DOCTYPE html>
<html lang="en">
<head>
    <title>Affichage des voitures ==>data base</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$req="select * from voiture;";
$result=mysql_query($req) or die ("Probleme de requete"); ?> <!--9assat el php-->


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Matricule</th>
                                <th class="column2">Marque</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?
                                while ($t=mysql_fetch_array($result)){
                                ?>
                                
                                <tr>
                                    <td class="column1"> <? echo("$t[0]"); ?> </td>
                                    <td class="column2"> <? echo("$t[1]"); ?></td>
                                </tr>
                                <?
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    

<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>