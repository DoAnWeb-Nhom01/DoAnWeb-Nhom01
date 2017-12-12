<a href="list.php">List</a> | <a href="show_cart.php">Show_cart</a> | <a href="xoa.php">Delete_cart</a></p>
<?php
include'connect.php';
?>

<?php 
$qr=mysql_query("select * from sanpham");


while($row=mysql_fetch_array($qr))
{
?>

<p>Ten san pham:<?php echo $row['tensanpham'];?> Don gia :<?php echo $row['dongia'];?> <a href="add.php?id=<?php echo $row['id'];?>">Mua</a></p>


<?php }?>


<p><a href="http://chiasehoctap.net/">chiasehoctap.net</a></p>