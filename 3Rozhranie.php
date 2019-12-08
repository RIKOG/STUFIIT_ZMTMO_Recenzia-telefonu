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
<p>
<?php echo $lang["Rozhr1"] ?>
</p>
  <table><td align="center"><img src="/images/3DTOUCH.jpg" width="80%"></td></table>
  <p>
  <?php echo $lang["Rozhr2"] ?>
  </p>
  <table><td align="center"><img src="/images/AIRDROP.jpg" width="62%"></td></table>
  <p>
  <?php echo $lang["Rozhr3"] ?>
  </p>
  <table><td align="center"><img src="/images/ICLOUD.jpg" width="62%"></td></table>
  <p>
  <?php echo $lang["Rozhr4"] ?>
  </p>
  <table><td align="center"><img src="/images/HODINKY.jpg" width="80%"></td></table>
  <p>
  <?php echo $lang["Rozhr5"] ?>
  </p>
  <table><td align="center"><img src="/images/APPSTORE2.jpg" width="62%"></td></table>
  <p>
  <?php echo $lang["Rozhr6"] ?>
  </p>
  <table><td align="center"><img src="/images/MESSAGES.jpg" width="62%"></td></table>
  <p>
  <?php echo $lang["Rozhr7"] ?>
  </p>
  <table><tr>
  <td align="center"><IMG SRC="/images/GIFPRAHA1.gif" width="100%"></td>
  <td align="center"><IMG SRC="/images/GIFPRAHA2.gif" width="100%"></td>
  </tr></table>
</body>
</html>
