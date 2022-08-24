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
          
      <form action="postforma.php" method="post" 
      enctype="multipart/form-data">
        <label for="naziv">Naziv</label>
        <input type="text" name="naziv" id="naziv" />

        <label for="datoteka">datoteka</label>
        <input type="file" name="datoteka" id="datoteka" />

        <input type="submit" value="Prenesi">
      </form>

      <pre>
      <?php 
      if(isset($_POST['naziv']) && isset($_FILES['datoteka'])){
        move_uploaded_file($_FILES['datoteka']['tmp_name'],
        $_POST['naziv'] . '.jpg' );
      }
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
