<?php require('actions/signupAction.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Forum</title>
</head>
<body>
  <br><br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>';} ?>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nom</label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
      <br><br>
    <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
    </form>
</body>
</html>