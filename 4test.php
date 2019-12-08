<?php include 'init.php'; ?>
<?php include $_SESSION['lang'] == 'sk' ? 'sk.php' : 'en.php'; ?>
<?php include 'poleobrazkov.php'; ?>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="/images/pozadie.jpg">
<?php include 'header_inc.php'; ?>
  <p>
  <?php echo $lang["test1"] ?>
  </p>
  <table><tr>
            <?php
                get_images_from_directory('imagesTest', "td", array('50%'));
            ?>

  </tr>
  </table>
  <table class="table">
    <tr>
      <td class="table">JA       --></td>
      <td class="table">THE BEST</td>
    </tr>
    <tr class="table">
      <td class="table">OSTATNI  --></td>
      <td class="table">NOT THE BEST</td>
    </tr>
  </table>

</body>
</html>
