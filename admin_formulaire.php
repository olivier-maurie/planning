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
    <div class="col-lg-10 content">
      
      <header>
        <div class="bg-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 school-name">
                <p>Admin panel</p>
              </div>
              <div class="col-lg-2">
                <p>Bonjour Admin</p>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="col-lg-2 col-lg-offset-2">
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Ecole</option>
            </select>
          </div>
          <div class="col-lg-2">
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Promotion</option>
            </select>
          </div>
          <div class="col-lg-2">
            <select class="btn btn-planning-admin">
              <option value="" disabled selected>Spécialité</option>
            </select>
          </div>
          <div class="col-lg-2">
            <button type="submit" class="btn btn-planning">Valider</button>
          </div>
        </div>
        <div class="col-lg-2 indice">
            Indice : 3
        </div>
      </div> <!-- end row -->

      <div class="row calendar">
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
      <span class="logo">
        <img class="logo" src="img/logo.png" alt="NovY"/>
      </span>
      <nav>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> Accueil</a></li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramettres</a></li>
          <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
        </ul>
      </nav>

      <div class="container-fluid">
        <h3>Ajouter</h3>
        <form action="admin_formulaire.php">
          <label for="nom_matiere">
            <div class="row">Matière</div>
            <input class="btn-add-form" type="text" name="nom_matiere"/>
          </label>
          <label for="salle">
            <div class="row">Salle</div>
            <input class="btn-add-form" type="text" name="salle"/>
          </label>
          <label for="date_debut">
            <div class="row">Date début</div>
            <select class="btn-add-form-date">
              <option value="" disabled selected>Année</option>
              <?php
                $year = date('Y');
                $next_year = date('Y', mktime(0, 0, 0, 0, 0, date('Y')+2));
                echo '<option value="">'.$year.'</option>';
                echo '<option value="">'.$next_year.'</option>';
              ?>
            </select>

            <select class="btn-add-form-date">
              <option value="" disabled selected>Mois</option>
              <?php
                for($m=1;$m<13;$m++){
                  echo '<option value="">'.$m.'</option>';
                }
              ?>
            </select>

            <select class="btn-add-form-date">
              <option value="" disabled selected>Jour</option>
              <?php
                for($j=1;$j<32;$j++){
                  echo '<option value="">'.$j.'</option>';
                }
              ?>
            </select>

          </label>
          <label for="date_fin">
            <div class="row">Date fin</div>
            <select class="btn-add-form-date">
              <option value="" disabled selected>Année</option>
              <?php
                $year = date('Y');
                $next_year = date('Y', mktime(0, 0, 0, 0, 0, date('Y')+2));
                echo '<option value="">'.$year.'</option>';
                echo '<option value="">'.$next_year.'</option>';
              ?>
            </select>

            <select class="btn-add-form-date">
              <option value="" disabled selected>Mois</option>
              <?php
                for($m=1;$m<13;$m++){
                  echo '<option value="">'.$m.'</option>';
                }
              ?>
            </select>

            <select class="btn-add-form-date">
              <option value="" disabled selected>Jour</option>
              <?php
                for($j=1;$j<32;$j++){
                  echo '<option value="">'.$j.'</option>';
                }
              ?>
            </select>
          </label>
          <label for="promotion">
            <div class="row">Promotion</div>
            <select class="btn-add-form" name="promotion">
              <option value="" disabled selected>Promotion</option>
            </select>
          </label>
          
          <input class="btn-add-form" type="submit">
        </form>
      </div>


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