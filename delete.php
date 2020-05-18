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
$result = $pdo->query("SELECT * FROM experience ORDER BY id_experience DESC");
//***************************************** */
if (!empty($_POST)) {

    //******************************************* */
    // Insertion

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["sous_titre"] = htmlentities($_POST["sous_titre"], ENT_QUOTES);
    $_POST["experience_description"] = htmlentities($_POST["experience_description"], ENT_QUOTES);
    $_POST["date_experience"] = htmlentities($_POST["date_experience"], ENT_QUOTES);

    $requeteSQL = "INSERT INTO experience (titre, sous_titre,date_experience, experience_description)";
    $requeteSQL .= " VALUES ('$_POST[titre]', '$_POST[sous_titre]', '$_POST[date_experience]','$_POST[experience_description],')";
    //echo $requeteSQL;
    $resultat = $pdo->exec($requeteSQL);
    echo $resultat . ' experience a été enregistrée<br>';
    //******************************************* */

}


?>



<div class="starter-template">  
    <form method="POST" action="index.php">

        <div class="form-group">
            <label for="titre">Titre de l'experience</label>
            <input type="texte" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="date_description">date de l'experience</label>
            <textarea rows="4" class="form-control" id="date_experience" name="date_experience"></textarea>
        </div>

        <div class="form-group">
            <label for="contenu">sous-titre de l'experience</label>
            <textarea rows="10" class="form-control" id="sous_titre" name="sous_titre"></textarea>
        </div>

        <div class="form-group">
            <label for="experience_description">description de l'experience</label>
            <textarea rows="10" class="form-control" id="experience_description" name="experience_description"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">valider</button>

    </form>
</body>