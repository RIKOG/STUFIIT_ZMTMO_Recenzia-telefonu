<?php include 'init.php'; ?>
<?php include 'en.php'; ?>
<?php include 'sk.php'; ?>
<html>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
     <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="pozadie.jpg">
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
  <?= $_SESSION['lang'] == 'sk' ? 'Model 6s je posledným na ktorom pracoval Steve Jobs pred svojou smrťou a pokladá sa za
                                         najväčší úspech Applu.' :
                                         'Model 6s was the last one that was worked on by Steve Jobs before his death and its considered the biggest Apple success.' ?>

  </p>
  <table>
      <tr>
          <td align="center"><img src="/images/NOTES.jpg" width="80%"></td>
          <td align="center"><img src="/images/MAPY.jpg" width="61.5%"></td>
      </tr>
  </table>
  <table>
      <tr>
          <td align="center"><img src="PRAHA1.jpg" width="100%"></td>
          <td align="center"><img src="PRAHA2.jpg" width="100%"></td>
          <td align="center"><img src="PRAHA 3.jpg" width="100%"></td>
      </tr>
  </table>

</body>
