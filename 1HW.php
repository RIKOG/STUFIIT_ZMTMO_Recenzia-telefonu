<?php include 'duplicity.php'; ?>
  <p>
  <?php echo $lang["HW1"] ?>
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
      <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Kamera' : 'Camera' ?></td>
      <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Predná 5MPX, zadná 12MPX schopné natáčať až v 4K 30FPS' : 'Front-facing 5MPX, back-facing 12MPX capable filming in 4K 30FPS' ?></td>
    </tr>
    <tr>
      <td class="table"><?= $_SESSION['lang'] == 'sk' ? 'Baterka' : 'Battery' ?></td>
      <td class="table">1715mAh</td>
    </tr>
  </table>
  <p>
  <?php echo $lang["HW2"]?>
  </p>
  <table>
    <tr>
    <?php
        get_images_from_directory('imagesHW', "td", array('80%'));
    ?>
    </tr>
    </table>
</body>
</html>
