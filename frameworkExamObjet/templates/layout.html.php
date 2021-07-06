<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titreDeLaPage ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
         <!-- <a class="nav-link" href="index.php?controller=gateau&task=index">Gateaux</a> !>
        </li>
        <?php //if(!$user){?>
     <!--     <li class="nav-item">
            <a href="index.php?controller=user&task=login">Connexion</a>
            <a href="index.php?controller=user&task=register">Inscription</a>
          </li> 
        <?php //} ?>
          <li class="nav-item">
            <a href="#" class="nav-link disabled">Disabled</a>
          </li>
      </ul> -->
      <?php //if($user){?>
        <p style="color : white" class="m-3">Bonjour  <?php //echo $user->username;  echo " !" ?></p>
       <!-- <a href="index.php?controller=user&task=logout" class="btn btn-danger">Déconnexion</a> -->
      <?php //} ?>

</nav>      


          <?php echo $contenuDeLaPage ?>
          




          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>