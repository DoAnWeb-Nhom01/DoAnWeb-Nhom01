<?php
	require_once "./lib/db.php";
	require_once 'cart.inc';
	// if ($_SESSION["dang_nhap_chua"] !=2) {
	// 	header('Location: index.php');
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <title>Quản lí loại sản phẩm</title>
	<?php
    include_once 'share/header.php';
    ?>
	
</head>
<body>

	<br>
	<br>
	<?php include 'module/AdminLoai.php'; ?>
	<?php include 'share/footer.php'; ?>
</body>
</html>