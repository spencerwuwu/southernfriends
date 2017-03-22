  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
          <h2>ch8</h2><h2>外語廣播節目</h2>
          <img src="img/Ch1/1.png" />
        </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="vie.php">越南語</a>
        </div>
          <div class="item list-w heavy">
            <a href="ind.php">印尼語</a>
          </div>
          <div class="item list-w heavy">
            <a href="eng.php">英文</a>
          </div>
          <div class="item list-w heavy">
            <a href="tai.php">泰文</a>
          </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
