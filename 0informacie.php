<?php include 'duplicity.php'; ?>

  <h1><center><?= $_SESSION['lang'] == 'sk' ? 'Základné informácie' : 'Basic info' ?></center></h1>
  <p>
  <?php echo $lang["H1_informacie"]?>
  </p>
  <table>
      <tr>
      <?php
          get_images_from_directory('imagesInformacie1', "td", array('80%', '80%', '80%'));
      ?>
      </tr>
  </table>
  <p>
  <?php echo $lang["Informacie2"]?>
  </p>
  <table>
      <tr>
      <?php
          get_images_from_directory('imagesInformacie2', "td", array('80%', '61.5%'));
      ?>
      </tr>
  </table>
  <table>
      <tr>
      <?php
          get_images_from_directory('imagesInformacie3', "td", array('100%', '100%', '100%'));
      ?>
      </tr>
  </table>

</body>
