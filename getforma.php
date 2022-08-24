<?php 
$ime = isset($_GET['ime']) ? $_GET['ime'] : '';
?>
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
          

          <form action="" method="get">
            <!-- najbolja praksa -->
            <label for="ime">Ime</label>
            <input type="text" id="ime" name="ime"
            value="<?=$ime?>" />

            <!-- Foundation praksa -->
            <label>Iznos
              <input type="number" name="iznos"  />
              <?php 
              // ovo nećemo raditi
              //value="<?php echo $_GET['iznos'];? >"
              
              ?> 
            </label>

            <label for="boja">Boja</label>
            <input type="color" id="boja" name="boja" />

            <label for="datum">Datum</label>
            <input type="date" id="datum" name="datum" />

            <label for="vrijeme">Vrijeme</label>
            <input type="datetime-local" id="vrijeme" name="vrijeme" />
          
           
            <input 
            placeholder="ivan.horvat@tvrtka.hr"
            type="email" id="email" name="email" />
        
            <label for="lozinka">Lozinka</label>
            <input
            required 
            type="password" id="lozinka" name="lozinka" />
          
          

            <!-- odabiri -->
            <p>Jednostruki odabir</p>
            <input type="radio" id="ljeto" name="gd" value="1" 
            checked="checked"
            />
            <label for="ljeto">ljeto</label><br />
            
            <input type="radio" id="zima" name="gd" value="2" />
            <label for="zima">zima</label>
            
            <p>Jednostruki odabir 2</p>
            <input type="radio" id="ljeto1" name="gd1" value="1" />
            <label for="ljeto1">ljeto</label><br />
            
            <input type="radio" id="zima1" name="gd1" value="2" />
            <label for="zima1">zima</label>

            <p>Višestruki odabir</p>
            <input type="checkbox" id="proljece" name="vo[]" value="1" />
            <label for="proljece">proljece</label><br />
            
            <input type="checkbox" id="jesen" name="vo[]" value="2" />
            <label for="jesen">jesen</label>

            <p>Odabir iz liste</p>
            <label for="stavka">Odaberi iz liste</label>
            <select name="stavka" id="stavka">
              <option value="1">Osijek</option>
              <option selected="selected" value="2">Donji Miholjac</option>
            </select>

            <label for="opis">Opis</label>
            <textarea name="opis" id="opis" cols="30" rows="5"></textarea>
            
            <hr />
            
          
            
            <input type="submit" value="Predaj">
          
          </form>

          <pre>
            <?php 
            var_dump($_GET);

            ?>
            </pre>


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
