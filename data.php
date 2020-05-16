<?php
//**************************************************** */
//Ajout des objets à mon site
//**************************************************** */
require_once("./obj/voiture.class.php");

//**************************************************** */
//Connection à la BDD
//**************************************************** */
$pdo = new PDO("mysql:host=localhost;dbname=b1a", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));