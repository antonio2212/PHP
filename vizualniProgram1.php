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
          
        <?php 
         // ulaz
          // GET parametar x i y
          if(isset($_GET['rez'])){
            $rez=$_GET['rez'];
            $x=$_GET['x'];
            $y=$_GET['y'];
            $yy = $y;
            // DZ: s funckiom eval https://www.php.net/manual/en/function.eval.php
            // generirati izraz te dobiti poligon za vježbanje
            $rezCode = $x + ++$yy;
            $rezCode += $yy;
            $tocno = $rez==$rezCode;
          }else{
            $rez='';
            $x=rand(-2,2);
            $y=rand(-2,2);
          }
          
        
        ?>
        $x=<?=$x?>, $y=<?=$y?><br />
        $rez = $x + ++$y;<br />
        $rez += $y; 
        <form action="" method="get">

        <label>
          x
          <input type="text" name="rez" value="<?=$rez?>">
        </label>
          <input type="hidden" name="x" value="<?=$x?>">
          <input type="hidden" name="y" value="<?=$y?>">
        
        <div class="grid-x grid-margin-x">
            <div class="cell large-6 medium-6">
              <input class="success button expanded" type="submit" value="Izračunaj">
            </div>
            <div class="cell large-6 medium-6">
              <a class="alert button expanded" href="vizualniProgram1.php">RESET</a>
            </div>
        </div>
          
        </form>
        <?php
        if(isset($_GET['rez'])){
          echo $tocno ? 'TOČNO' : 'NETOČNO';
        }
          
          
          ?>

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
