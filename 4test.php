<?php include 'duplicity.php'; ?>
  <p>
  <?php echo $lang["test1"] ?>
  </p>
  <table><tr>
  <?php
      get_images_from_directory('imagesTest', "td", array('50%'));
  ?>
  </tr>
  </table>
  <table class="table">
    <tr>
      <td class="table">JA       --></td>
      <td class="table">THE BEST</td>
    </tr>
    <tr class="table">
      <td class="table">OSTATNI  --></td>
      <td class="table">NOT THE BEST</td>
    </tr>
  </table>

</body>
</html>
