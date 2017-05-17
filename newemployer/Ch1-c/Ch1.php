  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
        <div class="one item content">
		  <h2>ch1</h2><h2>直聘中心辦理哪些<br>
外籍勞工聘僱作業</h2>
          <img src="../home/ch1.png" />
        </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="新聘.php">新聘</a>
        </div>
          <div class="item list-w heavy">
            <a href="續聘.php">續聘</a>
          </div>
          <div class="item list-w heavy">
            <a href="期滿轉換或轉出.php">期滿轉換或轉出</a>
          </div>
      </div>

      <?php
      $end = file_get_contents('end.php');
      echo $end;
      ?>
