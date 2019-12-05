<?php include 'init.php'; ?>
<?php include $_SESSION['lang'] == 'sk' ? 'sk.php' : 'en.php'; ?>
<html>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
     <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="/images/pozadie.jpg">
  <?php include 'header_inc.php'; ?>
  <h1><center><?= $_SESSION['lang'] == 'sk' ? 'Základné informácie' : 'Basic info' ?></center></h1>
  <p>
  <?php echo $lang["H1_informacie"]?>
  </p>
  <table>
      <tr>
          <td align="center"><img src="/images/LOCKSCREEN.jpg" width="80%"></td>
          <td align="center"><img src="/images/MENU.jpg" width="80%"></td>
          <td align="center"><img src="/images/NALAVONIECO.jpg" width="80%"></td>
      </tr>
  </table>
  <p>
  <?php echo $lang["Informacie2"]?>
  </p>
  <table>
      <tr>
          <td align="center"><img src="/images/NOTES.jpg" width="80%"></td>
          <td align="center"><img src="/images/MAPY.jpg" width="61.5%"></td>
      </tr>
  </table>
  <table>
      <tr>
          <td align="center"><img src="/images/PRAHA1.jpg" width="100%"></td>
          <td align="center"><img src="/images/PRAHA2.jpg" width="100%"></td>
          <td align="center"><img src="/images/PRAHA 3.jpg" width="100%"></td>
      </tr>
  </table>

</body>
