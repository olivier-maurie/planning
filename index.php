<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

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

  <header>
    <div class="bg-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
            <span class="logo">
              <img class="logo" src="img/logo.png" alt="NovY"/>
            </span>
          </div>
          <div class="col-lg-2">
            <p>Bonjour Pierre</p>
          </div>
        </div>
      </div>
    </div>
  </header>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 content">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <select class="form-control">
            <option>Semaine 48</option>
            <option>Semaine 49</option>
            <option>Semaine 50</option>
          </select>
        </div><!--  end col-2 -->
        <div class="col-lg-2 col-lg-offset-3 indice">
          Indice : 3
        </div>
      </div> <!-- end row -->
      <div class="row">
        <div class="col-lg-12">
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

  <aside class="col-lg-2">
    <div class="container-fluid">

      <nav>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> Accueil</a></li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramettres</a></li>
          <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
        </ul>
      </nav>

      <div class="wrap">
        <h3>Matières de la semaine</h3>
        <p>8H - 12H : C# en B3</p>
        <p>8H - 12H : Swift en B3</p>
      </div>

      <div class="wrap">
        <h3>Projet en cours</h3>
        <p>Arkhe</p>
        <p>Planning</p>
      </div>


      <div class="wrap">
        <h3>Voter pour la répartition des tâches</h3>
        <p>
          <i class="fa fa-star fa-fw"></i>
          <i class="fa fa-star fa-fw"></i>
          <i class="fa fa-star-half-full fa-fw"></i>
          <i class="fa fa-star-o fa-fw"></i>
          <i class="fa fa-star-o fa-fw"></i>
        </p>
      </div>


      <footer>
       <p>©Novy, 2015</p>
      </footer>

    </div> <!-- end container -->
  </aside>

  </div> <!-- end row -->
</div><!-- end container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>