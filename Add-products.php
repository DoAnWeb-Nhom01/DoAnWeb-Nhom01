<?php 
require_once 'lib/db.php';
require_once 'cart.inc';
// if ($_SESSION["dang_nhap_chua"] !=2) {
// 		header('Location: index.php');
// 	}
// if ($_SESSION["Da_Dang_Nhap"] !=2) {
// 		header('Location: index.php');
// 	}
$msg="";



if (isset($_POST["btnSave"])) {
	$image=$_FILES['fuMain']['name'];
	$target= "images/".basename($image);
	
	if(move_uploaded_file($_FILES['fuMain']['tmp_name'],$target)){
		$msg="Image upload successfully";
	}else
	{
		$msg="There was a problem uploading image";
	}
	$a=0;
	$b=0;
	$name = $_POST["txtProName"];
	$price = $_POST["txtPrice"];
	$quantity =$_POST["txtQuantity"];
	$catId = $_POST["selCatID"];
	$tinyDes = $_POST["txtTinyDes"];
	$fullDes = $_POST["txtFullDes"];
	$manId=$_POST["selManID"];
	$o_ngay = strtotime("+7 hours", time());
    $ngay = date("Y-m-d H:i:s", $o_ngay);
	$xuatxu = $_POST["txtXuatxu"];

	$sql = "insert into sanpham(TenSP, Gia, MoTaNgan, MoTaDai, HinhAnh, NhaSX, LoaiSP, LuotXem, Soluongban,XuatSu,NgayTiepNhan,SoLuongTon) values('$name', $price, '$tinyDes', '$fullDes', '$image', $manId, $catId,$a,$b,'$xuatxu',\"$ngay\",$quantity)";
	write($sql);


	// $f = $_FILES["fuMain"];
	// if ($f["error"] > 0) {

	// } else {

	// 	mkdir("imgs/$id");

	// 	$tmp_name = $f["tmp_name"];
	// 	$name = $f["name"];
	// 	$destination = "imgs/$id/main.jpg";

	// 	move_uploaded_file($tmp_name, $destination);
	// }

	// $f = $_FILES["fuThumbs"];
	// if ($f["error"] > 0) {

	// } else {


	// 	$tmp_name = $f["tmp_name"];
	// 	$name = $f["name"];
	// 	$destination = "imgs/$id/thumbs.jpg";

	// 	move_uploaded_file($tmp_name, $destination);
	// }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <?php
    include_once 'share/header.php';
    ?>
</head>
<body>
	<br>
	<br>
	<?php include 'module/AddProduct.php'; ?>
	<?php include 'share/footer.php'; ?>
</body>
</html>