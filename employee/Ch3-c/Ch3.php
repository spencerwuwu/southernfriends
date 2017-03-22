  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
          <h2>ch3</h2><h2>假日好去處</h2>
          <img src="img/Ch1/1.png" />
        </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="ch3北部.php">北部 </a>
        </div>
        <div class="item list-w heavy">
          <a href="ch3台北市.php">台北市 </a>
        </div>
        <div class="item list-w heavy">
          <a href="ch3中部.php">中部 </a>
        </div>
        <div class="item list-w heavy">
          <a href="ch3南部.php">南部 </a>
        </div>
        <div class="item list-w heavy">
          <a href="ch3東部.php">東部 </a>
        </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
