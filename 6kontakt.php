<?php include 'duplicity.php'; ?>
  <h1><center><?php echo $lang["KontaktH1"] ?></center></h1>
  <h2><center>Email: Rich.gajdosik@gmail.com</center></h2>
  <table>
    <tr>
        <?php
            get_images_from_directory('imagesKontakt', "td", array('100%'));
        ?>
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
