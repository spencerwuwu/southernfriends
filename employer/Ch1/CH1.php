  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
          <img src="img/Ch1/1.png" />
          <h2>ch1</h2><h2>移工國簡介</h2>
        </div>
      <div class="item list-con">
        <div class="item list heavy">
          <a href="in.php">印尼</a>
        </div>
          <div class="item list heavy">
            <a href="phi.php">菲律賓簡介</a>
          </div>
          <div class="item list heavy">
            <a href="tai.php">泰國簡介</a>
          </div>
          <div class="item list heavy">
            <a href="vie.php">越南簡介</a>
          </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
