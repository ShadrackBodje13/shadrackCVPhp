<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CVlogin - Shadrack Bodje</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">Titre de l'experience</label>
            <input type="texte" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="contenu">sous-titre de l'experience</label>
            <textarea rows="10" class="form-control" id="contenu" name="contenu"></textarea>
        </div>

        <div class="form-group">
            <label for="titre">description de l'experience</label>
            <input type="file" class="form-control-file" id="img" name="img[]">
        </div>

        <button type="submit" class="btn btn-primary">valider</button>

    </form>
</div>