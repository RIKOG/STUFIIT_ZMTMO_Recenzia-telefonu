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
  <div class "container2">
  <h1><center><?php echo $lang["SWH1"] ?></center></h1>
  </div>

  <table>
      <tr>
          <td align="center"><img src="/images/APPSTORE.jpg" width="80%"></td>
          <td align="center"><img src="/images/CONTACTS.jpg" width="80%"></td>
          <td align="center"><img src="/images/FITNESS.jpg" width="80%"></td>
      </tr></table>

 <p><?php echo $lang["SW1"] ?></p>

  <table><tr>
      <td align="center"><img src="/images/PHOTOAPP.jpg" width="80%"></td>
      <td align="center"><img src="/images/SHAREAPP.jpg" width="80%"></td>
  </tr> </table>

  <p><?php echo $lang["SW2"] ?></p>

</body>
</html>
