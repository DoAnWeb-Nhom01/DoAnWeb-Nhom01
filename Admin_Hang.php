<?php
	require_once "./lib/db.php";
	require_once 'cart.inc';
	// if ($_SESSION["dang_nhap_chua"] !=2) {
	// 	header('Location:index.php');
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản lí nhà sản xuất</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
	<?php
    include_once 'share/header.php';
    ?>
</head>
<body>
	<br>
	<br>
	<?php include 'module/AdminHang.php'; ?>
	<?php include 'share/footer.php'; ?>
</body>
</html>