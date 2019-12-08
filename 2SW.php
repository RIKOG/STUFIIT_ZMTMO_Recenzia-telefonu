<?php include 'init.php'; ?>
<?php include $_SESSION['lang'] == 'sk' ? 'sk.php' : 'en.php'; ?>
<?php include 'poleobrazkov.php'; ?>
<html>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
     <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="/images/pozadie.jpg">
<?php include 'header_inc.php'; ?>
  <div class "container2">
  <h1><center><?php echo $lang["SWH1"] ?></center></h1>
  </div>

  <table>
      <tr>
      <?php
          get_images_from_directory('imagesSW1', "td", array('80%','80%','80%'));
      ?>
      </tr>
      </table>

 <p><?php echo $lang["SW1"] ?></p>

  <table><tr>
        <?php
            get_images_from_directory('imagesSW2', "td", array('80%','80%'));
        ?>
  </tr> </table>

  <p><?php echo $lang["SW2"] ?></p>

</body>
</html>
