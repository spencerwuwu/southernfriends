  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
          <h2>ch1</h2><h2>About Taiwan</h2>
          <img src="../home/ch1.png" />
        </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="ch1美麗的小島.php">Formosa Taiwan</a>
        </div>
          <div class="item list-w heavy">
            <a href="ch1氣候與自然災害.php">Taiwanese Culture</a>
          </div>
          <div class="item list-w heavy">
            <a href="ch1特殊人文風情.php">Taiwanese Culture</a>
          </div>
          <div class="item list-w heavy">
            <a href="ch1台灣特殊節日.php">National Holidays</a>
          </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
