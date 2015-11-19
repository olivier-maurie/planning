<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Projet Planning</title>

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
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 col-md-9 col-sm-9 content">
      
      <header>
        <div class="bg-header">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-sm-10 school-name">
              <p>Admin panel</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
              <p>Bonjour Admin</p>
            </div>
          </div>
        </div>
      </header>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-sm-10">
          <div class="btn-group-s">
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Ecole</option>
            </select>
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Promotion</option>
            </select>
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Spécialité</option>
            </select>
            <button type="submit" class="btn btn-planning">Valider</button>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 indice">
            Indice : 3
        </div>
      </div> <!-- end row -->

      <div class="row calendar">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <table class="table planning">
            <thead>
              <tr>
              <?php
                $tab = array("Heures", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
                for($c=0;$c<7;$c++){
                  echo "<td>".$tab[$c]."</td>";
                }
              ?>
              </tr>
            </thead>
            <tbody>
            <?php
            for($c=8;$c<21;$c++){
              echo '<tr>
                    <td>'.$c.'H</td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    <td><hr></td>
                    </tr>';
              }
            ?>
            </tbody>
          </table>
        </div> <!-- end col-12 -->
      </div> <!-- end row -->
    </div> <!-- end col-10 -->

  <aside class="col-lg-2 col-md-3 col-sm-3">
      <?php include('inc/menu.php'); ?>

      <nav class="admin">
        <ul class="nav nav-pills nav-stacked">
          <a href="#" class="btn">Ecole</a>
          <a href="#" class="btn">Promotion</a>
          <a href="#" class="btn">Spécialité</a>
          <a href="#" class="btn">Tâches (matières)</a>
          <a href="#" class="btn">Tâches (projet)</a>
          <a href="#" class="btn">Matières</a>
          <a href="#" class="btn">Intervenants</a>
          <a href="#" class="btn">Etudiants</a>
          <a href="#" class="btn">Admin</a>
        </ul>
      </nav>

        <footer>
         <p>©Novy, 2015</p>
        </footer>
  </aside>

  </div> <!-- end row -->
</div><!-- end container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>