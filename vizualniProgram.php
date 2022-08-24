<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
          Program će dva unesena broja zbrojiti,
          pomnožiti s 100 i uvećati za 10
        <?php 
         // ulaz
          // GET parametar x i y
          $x = isset($_GET['x']) ? $_GET['x'] : 0; //infline if
          $y = isset($_GET['y']) ? $_GET['y'] : 0; 
        
        ?>
        <form action="" method="get">

        <label>
          x
          <input type="text" name="x" value="<?=$x?>">
        </label>
        <label>
          y
          <input type="text" name="y" value="<?=$y?>">
        </label>

        
        <input class="success button expanded" type="submit" value="Izračunaj">

        </form>
        <?php
           // obrada
          $rez = $x + $y;
          $rez *= 100;
          $rez = $rez + 10;
          //izlaz
          echo $rez;
          ?>


          Za prikaz rada s POST
          <form action="nizoviipetlje/ugradeninizovi.php" 
          method="post" enctype="multipart/form-data">
          <input type="file" name="datoteka">
          <input type="hidden" name="primjer" value="Edunova">
          <input type="submit" value="Testiraj">
        </form>
        </div>
      </div>
    </div>
    <!-- End tijelo -->
    <?php 
    // čitati https://www.tutorialrepublic.com/php-tutorial/php-include-files.php
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>
