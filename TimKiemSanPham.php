<?php 
	include_once 'lib/db.php';
	session_start();
	if (!isset($_POST["btnSearch"]) && !isset($_POST["btnTimKiem"])) {
		header('location: index.php');
	}
	$bool = 0;
	if(isset($_POST["btnSearch"]))
	{
		$bool = 1;
		$timkiem = $_POST["txtSearch"];	
	}
	if(isset($_POST["btnTimKiem"]))
	{
		$gt = $_POST["giatu"];
		$_SESSIOM["GT"] = $gt;
		$d = $_POST["den"];
		$nsx =$_POST["NSX"];
		$lx = $_POST["loaixe"];
		$_SESSION["Loaixe"] = $lx;
		if($gt == 0 && $d ==0 && $nsx == 0 && $lx == 0)
		{
			$bool = 2;
		}
		if($gt != 0 && $d !=0 && $nsx != 0 && $lx != 0)
		{
			$giatu = $gt *100000000;
			$giaden = $d *100000000;
			$bool = 3;
		}
		if($gt != 0 && $d ==0 && $nsx == 0 && $lx == 0)
		{
			$giatu = $gt * 100000000;
			$bool = 4;
		}
		if($gt == 0 && $d !=0 && $nsx == 0 && $lx == 0)
		{
			$giaden = $d * 100000000;
			$bool = 5;
		}
		if($gt == 0 && $d ==0 && $nsx != 0 && $lx == 0)
		{
			$bool = 6;
		}
		if($gt == 0 && $d ==0 && $nsx == 0 && $lx != 0)
		{
			$bool = 7;
		}
		if($gt != 0 && $d !=0 && $nsx == 0 && $lx == 0)
		{
			$giatu = $gt * 100000000;
			$giaden = $d * 100000000;
			$bool = 8;
		}
		if($gt != 0 && $d ==0 && $nsx != 0 && $lx == 0)
		{
			$giatu = $gt * 100000000;
			$bool = 9;
		}
		if($gt != 0 && $d ==0 && $nsx == 0 && $lx != 0)
		{
			$giatu = $gt * 100000000;
			$bool = 10;
		}
		if($gt == 0 && $d !=0 && $nsx != 0 && $lx == 0)
		{
			$giaden = $d * 100000000;
			$bool = 11;
		}
		if($gt == 0 && $d !=0 && $nsx == 0 && $lx != 0)
		{
			$giaden = $d * 100000000;
			$bool = 12;
		}
		if($gt == 0 && $d ==0 && $nsx != 0 && $lx != 0)
		{
			$bool = 13;
		}
		if($gt != 0 && $d !=0 && $nsx != 0 && $lx == 0)
		{
			$giatu = $gt * 100000000;
			$giaden = $d * 100000000;
			$bool = 14;
		}
		if($gt != 0 && $d !=0 && $nsx == 0 && $lx != 0)
		{
			$giatu = $gt * 100000000;
			$giaden = $d * 100000000;
			$bool = 15;
		}
		if($gt == 0 && $d !=0 && $nsx != 0 && $lx != 0)
		{
			$giaden = $d * 100000000;
			$bool = 16;
		}
	}
	
	$tilte = "Tìm kiếm sản phẩm";
	include_once 'share/header.php';
	echo "<br>";
	echo "<br>";
	include_once "module/TimKiem.php";
	include_once 'share/footer.php';