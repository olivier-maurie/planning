<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Connexion - Projet Planning</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="bg_co">

  <div class="wrap-co">
    <div>
      <span class="logo">
        <img class="logo" src="img/logo.png" alt="NovY"/>
      </span>
      <p>
        Connexion
      </p>
    </div>
    <div>
      <form action="connexion.php">
        <input type="mail" class="form-control" placeholder="exemple@novy.com"/><i class="fa fa-user"></i>
        <input type="password" class="form-control" placeholder="Mot de passe"/><i class="fa fa-lock"></i>
        <button class="btn" type="submit">Connexion</button>
      </form>
    </div>
<!--       <p><a href="#">Mot de passe oublié</a></p> -->
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>