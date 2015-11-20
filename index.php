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
              <p>Ingésup</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 user">
              <p>Bonjour Pierre</p>
            </div>
          </div>
        </div>
      </header>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-sm-10">
          <div class="btn-group-s">
            <button class="btn btn-planning">Cette semaine</button>
            <button class="btn btn-planning">Semaine prochaine</button>
            <button class="btn btn-planning">Semaine suivante</button>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 indice">
            <p>Indice : 3</p>
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
      
      <div class="container-fluid">

        <div class="wrap">
          <h3>Matières</h3>
          <p>8H - 12H : C# en B3</p>
          <p>8H - 12H : Swift en B3</p>
        </div>

        <div class="wrap">
          <h3>Projets</h3>
          <p>Arkhe</p>
          <p>Planning</p>
        </div>


        <div class="wrap">
          <h3>Voter la répartition</h3>
          <p class="vote">
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
      </div>
  </aside>

  </div> <!-- end row -->
</div><!-- end container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>