  <?php
$top = file_get_contents('basic.php');
echo $top;
?>
<div class="topcon">
      <div class="myrow centered">
        <div class="one item content">
          <h2>南方朋友</h2>
          <img src="img/" />
        </div>
      </div>
      <div class="item list-con-lan">
        <div class="item list-lan">
          <a href="#">中文</a>
        </div>
        <div class="item list-lan">
          <a href="#">English</a>
        </div>
        <div class="item list-lan">
          <a href="#">中文</a>
        </div>
        <div class="item list-lan">
          <a href="#">English</a>
        </div>
      </div>
      <div class="item list-con">
        <div class="item list-w heavy">
          <a href="employer/index.php">雇主小幫手</a>
        </div>
        <div class="item list-w heavy">
          <a href="employee/index.php">移工小幫手</a>
        </div>
        <div class="item list-w heavy">
          <a href="newemployer/index.php">直聘小幫手</a>
        </div>
        <div class="item list-w heavy">
          <a href="download/index.php">下載專區</a>
        </div>
<?php
$end = file_get_contents('end.php');
echo $end;
?>
