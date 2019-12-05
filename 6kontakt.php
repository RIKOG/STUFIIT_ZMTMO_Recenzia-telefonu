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
  <h1><center><?php echo $lang["KontaktH1"] ?></center></h1>
  <h2><center>Email: Rich.gajdosik@gmail.com</center></h2>
  <table>
    <tr>
      <td align="center"><img src="/images/LOGOFINAL.svg" width="100%"></td>
    </tr>
  </table>
<?php include 'komentar.php'; ?>
<?php include 'komentare.php'; ?>

</body>
</html>
<!-- <p>
Tu ma možno kontaktovať, zanehaj svoj email a komentár:<br>


 <input type="text" name="uzivatelsky email">
  <br>
  <textarea rows="8" cols="90" name="comment" form="komentar">
Sem zadaj svoj komentár</textarea>
    <br>
    <input type="submit">
  </p> -->
