<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
     <!--******************* BOOTSTRAP  ********************** -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container col-md-3 mt-5">
    <div class="card-header">Formulaire de connexion</div>
<div class="card">
    <div class="card-body">
    <form>
  <div class="mb-3">
    <label for="InputEmail" class="form-label">Code</label>
    <input type="text" class="form-control" id="InputEmail" name="code">
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" id="InputPassword" name="mdp">
  </div>
  
  <button type="submit" class="btn btn-primary" name="connecter">Se Connecter</button>
</form>
    </div>
</div>
</div>

  <!-- JavaScript Bundle with Popper -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</body>
</html>