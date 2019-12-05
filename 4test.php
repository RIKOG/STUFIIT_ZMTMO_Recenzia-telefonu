<?php include 'init.php'; ?>
<?php include $_SESSION['lang'] == 'sk' ? 'sk.php' : 'en.php'; ?>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="/images/pozadie.jpg">
<?php include 'header_inc.php'; ?>
  <p>
    Telefon si už momentálne s cenovkou 280€ hravo poradí s Androidami v rovnakej cenovej kategorií.
    <?php echo $lang['testujem'] ?>
  </p>
  <table><tr>
    <td align="center"><IMG SRC="/images/ANTUTU420.png" width="50%"></td>
  </tr>
  </table>
  <table class="table">
    <tr>
      <td class="table">JA       --></td>
      <td class="table">THE BEST</td>
    </tr>
    <tr class="table">
      <td class="table">OSTATNI  --></td>
      <td class="table">GARBAGE</td>
    </tr>
  </table>

</body>
</html>
