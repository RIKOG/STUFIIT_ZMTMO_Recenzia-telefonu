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
<?php echo $lang["videa1"] ?></p>
  <table><tr>
    <td><video width="375" height="667" autoplay controls>
      <source src="/images/video1.mp4" type="video/mp4">
      Tvoj prehliadač nepodporuje HTML5 spúšťanie videi.
    </video>
    </td>
    <td><video width="375" height="667" autoplay controls>
      <source src="/images/video.mp4" type="video/mp4">
      Tvoj prehliadač nepodporuje HTML5 spúšťanie videi.
    </video>
    </td>
  </tr></table>

<p>
<?php echo $lang["videa2"] ?>
</p>
  <center>
  <audio controls>
    <source src="/images/ALARM.mp3" type="audio/mpeg">
    Tvoj prehliadač nepodporuje HTML5 spúšťanie audia.
  </audio>
  <audio controls>
    <source src="/images/ALARM1.mp3" type="audio/mpeg">
    Tvoj prehliadač nepodporuje HTML5 spúšťanie audia.
  </audio>
  <audio controls>
    <source src="/images/RINGTONE.mp3" type="audio/mpeg">
    Tvoj prehliadač nepodporuje HTML5 spúšťanie audia.
  </audio>
  </center>
</body>
</html>
