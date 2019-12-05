<?php include 'init.php'; ?>
<?php include $_SESSION['lang'] == 'sk' ? 'sk.php' : 'en.php'; ?>
<html>
 <head>
   <title>Projekt telefon</title>
   <link rel="stylesheet"
   type="text/css" href="styles.css">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 </head>
<body background="pozadie.jpg">
<?php include 'header_inc.php'; ?>
<p>Nasledujúca ukážka zobrazuje použitie funkcie applepay ktorá kompletne nahrádza platobnú kartu.</p>
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

<p>Tu si môžete vypočuť klasické zvonenie iPhonu.</p>
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
