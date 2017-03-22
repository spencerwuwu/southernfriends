  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
          <h2>ch1</h2><h2>關於台灣</h2>
          <img src="img/Ch1/1.png" />
        </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="ch1美麗的小島.php">美麗的小島</a>
        </div>
          <div class="item list-w heavy">
            <a href="ch1氣候與自然災害.php">氣候與自然災害</a>
          </div>
          <div class="item list-w heavy">
            <a href="ch1特殊人文風情.php">特殊人文風情</a>
          </div>
          <div class="item list-w heavy">
            <a href="ch1台灣特殊節日.php">台灣特殊節日</a>
          </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
