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
  <p>
  <?= $_SESSION['lang'] == 'sk' ? 'Vnútro je narozdiel od vonkajšieho dizajnu všetko nové. Použitý je nový chip Apple A9 ktorý
                                   sa skladá z procesoru o 2jadrách a 1.85GHz, pohybového koprocesru M9 určeného pre
                                   spracovávanie GPS, krokomer, gyroskop a akcelerometru. Grafická časť pozostáva
                                   z PowerVR GT7600. Nižšie môžete vidieť presný rozpis hardwaru a v neskoršej sekcii porovnáme
                                   iPhone s androidom s rovnakým antutu benchmark výsledkom.' :
                                  'The insides are completely different apart from the same design as the iPhone 6. Theres new
                                   chip Apple A9 made out of 2cores, 1.85GHz processor called Twister, M9 processor handling
                                   the GPS and the graphic processor called PowerVR GT7600. In the lower part you can see the exact hardware
                                   written in a table and in the next section we compare iPhone with android phone with similiar antutu benchmark result' ?>



  </p>

  <table class="table">
  <tr>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Procesor' : 'Processor' ?></td>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'A9 2jadrá s 1.85GHz' : 'A9 2cores with 1.85GHz' ?></td>
  </tr>
  <tr class="table">
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Grafický chip' : 'Graphic chip' ?></td>
    <td class="table">PowerVR</td>
  </tr>
  <tr>
    <td class="table">RAM</td>
    <td class="table">2GB LPDDR4</td>
  </tr>
  <tr>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Uložisko' : 'Drive Space' ?></td>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? '16, 32, 64, 128GB pamäte podľa modelu' : '16, 32, 64, 128GB of memory depending on memory' ?></td>
  </tr>
  <tr>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Displej' : 'Display' ?></td>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? '4,7" displej (1334 x 750, 332 ppi) s 3D-touch' : '4,7" display (1334 x 750, 332 ppi) with 3D-touch' ?></td>
  </tr>
  <tr>
    <<td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Kamera' : 'Camera' ?></td>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Predná 5MPX, zadná 12MPX schopné natáčať až v 4K 30FPS' : 'Front-facing 5MPX, back-facing 12MPX capable filming in 4K 30FPS' ?></td>
  </tr>
  <tr>
    <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Baterka' : 'Battery' ?></td>
    <td class="table">1715mAh</td>
  </tr>
</table>

  <p> <?= $_SESSION['lang'] == 'sk' ? 'K iPhonu je pribalené externé príslušentvo ako nabíjačka(samozrejme) slúchatká, nálapeky, spinka na otvorenie sim tray-u
                                         a mnoho dalších malých vecí.' : 'Packaged with the iPhone there is external accessories like charger(ofcourse), headphones,
                                          stickers, pins for sim tray and many more small things.' ?></p>
  <table>
    <tr>
      <td align="center"><img src="/images/PRISLUSENSTVO.jpg" width="100%"></td>
    </tr></table>
</body>
</html>
