<?php
	
	include_once 'lib/db.php';
	$bool = 0;
	if(!isset($_GET["MaNSX"]) && !isset($_GET["MaLoai"]))
	{
		header('location: index.php');
	}
	if (isset($_GET["MaNSX"])) {
		$bool = 1;
		$msx = $_GET["MaNSX"];
		$tennsx = "select * from nhasanxuat where MaNSX = $msx";
		$loadnsx = load($tennsx);
		$tennhasanxuat = $loadnsx->fetch_assoc();
	}
	if (isset($_GET["MaLoai"]))
	{
		$bool = 2;
		$ml = $_GET["MaLoai"];
		$sql = "select * from sanpham where LoaiSP = $ml";
		$tenl = "select * from loaixe where MaLoai = $ml";
		$loadlsp = load($tenl);
		$tenloai = $loadlsp->fetch_assoc();
	}
	if($bool ==1)
	{
		$tilte = $tennhasanxuat["TenNSX"];	
	}
	if ($bool == 2) {
		$tilte = $tenloai["TenLoai"];	
	}
	include_once 'share/header.php';
	echo "<br>";
	echo "<br>";
	include_once 'module/view.php';
	include_once 'share/footer.php';
