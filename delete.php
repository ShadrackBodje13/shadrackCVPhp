<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Supprimer ...</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>
<body>
<?php
//***************************************** */
//Enregistrement du nouvelle experience
$pdo = new PDO("mysql:host=localhost;dbname=curriculum", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
/*$result = $pdo->query("SELECT * FROM experience ORDER BY id_experience DESC");

if (!empty($_POST)) {

   
    // Insertion

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["sous_titre"] = htmlentities($_POST["sous_titre"], ENT_QUOTES);
    $_POST["experience_description"] = htmlentities($_POST["experience_description"], ENT_QUOTES);
    $_POST["date_experience"] = htmlentities($_POST["date_experience"], ENT_QUOTES);

    $requeteSQL = "DELETE FROM experience WHERE titre=$_POST["titre"]";
    //$requeteSQL .= " VALUES ('$_POST[titre]', '$_POST[sous_titre]', '$_POST[date_experience]','$_POST[experience_description],')";
    //echo $requeteSQL;
    $resultat = $pdo->exec($requeteSQL);
    echo $resultat . ' experience supprimée<br>';
    

}
*/

  if (isset($_POST['idToDelete'])) {
      $id = $_POST['idToDelete'];
      echo $id;
  }
  ?>

  <?php<br>//connection BDD<br>try{<br>    
  $bdd = new PDO('mysql:host = localhost;dbname=cur;charset=utf8','root','');<br>echo 'ok';<br>}<br>catch (Exception $e){<br>  die('Erreur : ' . $e->getMessage());<br>}
 
$id_el = $_POST['id'];
 
$bdd->query("DELETE  FROM experience  where id= $id_el");   //suppression dans bdd
 
 
header('Location: index.php');
exit();
 
 
// fermeture de la connection à la bdd<br>if ($bdd) {<br>   $bdd = NULL;<br>}<br>?>





<form>
<div class="form-group">

    <label for="exampleFormControlSelect1">selectionnez le titre dans l'ordre que vous voulez supprimer</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option id="titre1">1</option>
      <option id="titre2">2</option>
      <option id="titre3">3</option>
      <option id="titre4">4</option>
      <option id="titre5">5</option>

      <form method="post" action="delete_bdd.php" class="delete_form">
        <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>"/>
        <input type="submit" name="valider" class="delete" value="Supprimer" />
     </form><br><br>
</select>   
</form>

</body>