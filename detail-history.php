<?php
	// session_start();
	include_once 'lib/db.php';
	session_start();
	if (!isset($_GET["id"])) {
		header('Location: index.php');
	}
	if ($_SESSION["Da_Dang_Nhap"] == 0) 
	{
		header('location: index.php');
	}
	if (!isset($_SESSION["Da_Dang_Nhap"])) {
		$_SESSION["Da_Dang_Nhap"] = 0;
	} 

	if ($_SESSION["Da_Dang_Nhap"] == 0) {
		if(isset($_SESSION["Thong_tin_user"])) {
			// tái tạo session
			$user_id = $_SESSION["Thong_tin_user"]->MaKH;
			$sql = "select * from user where MaKH = $user_id";
			$rs = load($sql);
			$_SESSION["Thong_tin_user"] = $rs->fetch_object();
			$_SESSION["Da_Dang_Nhap"] = 1;
			

		}

		// } else {
		// 	header("Location: dangnhap.php");
		// }
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    

<?php
    include_once 'share/header.php';
    ?>
</head>
<body>
	
	<div class="container" style="margin-top: 30px">
		
		<div class="content">
			
			<div class="col-md-12 top-single" >
					
						<h3 class="future" style="text-align: center; color: blue;font-weight: bold;" >Chi tiết hóa đơn</h3>
						
							<table class="table table-hover" style="margin-top: 20px">
							<thead>
								<tr>
									<th class="col-md-4">Tên sản phẩm</th>
									<th class="col-md-3">Số lượng</th>
									<th class="col-md-3">Đơn Giá</th>
									<th class="col-md-2">Thành tiền</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
								
								$id = $_GET["id"];
								$sql = "select * from cthoadon where MaHD = $id ";
								$rs = load($sql);
								if ($rs->num_rows > 0){ 
									while ($row = $rs->fetch_assoc()){
										$name = $row["MaSP"];
										$gia= $row["DonGia"];
										$SL= $row["SoLuong"];
										$TT= $row["ThanhTien"];
										
										$d_sql = "select * from sanpham where MaSP = $name";
										$rss = load($d_sql);
										$row = $rss->fetch_assoc();
										$tenSP = $row["TenSP"];
									 
									
							?>

								<tr>
									
									<td ><?= $tenSP ?></td>
									<td><?= $SL ?></td>
									<td><?= number_format($gia) ?> VND</td>
									<td><?= number_format($TT) ?> VND</td>
									<!-- <td><?= $q ?></td> -->
									
									
								</tr>

							<?php 
								}
							}
							 ?>
							</tbody>
						</table>
							<!-- <div class="form-group">
								<label class="col-sm-2 control-label">Ngày sinh</label>
									<input class="col-sm-10" id="txtngay" name="txtngay" type="text" value="" style="width: 400px;border-radius: 10px;color: blue;font-weight: bold;">
										
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Tên đăng nhập</label>
									<input class="col-sm-10" id="txttendangnhap" name="txttendangnhap" type="text" value="" style="width: 400px;color: blue;font-weight: bold;">

							</div> -->
						
			</div>
		</div>
	</div>
	<br>
	<br>
	<?php
    include_once 'share/footer.php';
    ?>
</body>
</html>