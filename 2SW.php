<?php include 'duplicity.php'; ?>
  <div class "container2">
  <h1><center><?php echo $lang["SWH1"] ?></center></h1>
  </div>
  <table>
      <tr>
      <?php
          get_images_from_directory('imagesSW1', "td", array('80%','80%','80%'));
      ?>
      </tr>
  </table>
 <p><?php echo $lang["SW1"] ?></p>
  <table><tr>
      <?php
          get_images_from_directory('imagesSW2', "td", array('80%','80%'));
      ?>
  </tr> </table>
  <p><?php echo $lang["SW2"] ?></p>
</body>
</html>
