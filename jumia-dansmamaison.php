<?php
/***
 * Module name : jumia_dansmamaison
 * Author : Vogel Paolo BASSO
 */

 // N'oubliez surtout pas de définir dans le fichier mysql_config.php les paramètres du serveur de base de donnée
 // définir dans le fichier json_file.php le chemin de la création serveur du fichier json 

 
header('Content-type: text/plain; charset=utf-8'); // définition de l'encodage utilisé pour le fichier

echo "DEBUT DU PROGRAMME : jumia-dansmamaison \n";

/*** liste des fichiers importé dans le code de Jumia***/

require( 'http/http-connection.php' ); 
//require('models/jumiaproduct.php'); // importation du model de produit jumia
//require('api-jumia/api-connection.php');// établisseent de la connection avec jumia
//require('mysql/mysql_config.php'); // importation des paramètres mysql

//require('json/json_config.php'); // importation des paramètres JSON

?>