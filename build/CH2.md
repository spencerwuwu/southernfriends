<?php
$top = file_get_contents('basic.php');
echo $top;
?>
<div class="one item content" markdown="1">

###3/4									<--這是標題
![](img/Ch2/第二章.png)					<--這是插入圖片
字										<--直接打是內文



</div>
<?php
$end = file_get_contents('end.php');
echo $end;
?>
