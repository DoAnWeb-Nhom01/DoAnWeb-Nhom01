<?php
	// session_start();
include_once 'lib/db.php';
	session_start();
	if ($_SESSION["Da_Dang_Nhap"] != 1) 
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
					
          					<h1 style="font-size: 20pt; color: blue; text-align: center;" > Lịch sử mua hàng </h1>
						
							<table class="table table-hover" style="margin-top: 20px">
							<thead>
								<tr>
									<th>Khách hàng</th>
									<th>Ngày mua hàng</th>
									<th class="col-md-3">Tổng tiền</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$id = $_SESSION["Thong_tin_user"]->MaKH;
								$sql = "select * from hoadon where MaKH = $id";
								$rs = load($sql);
								if ($rs->num_rows > 0){ 
									while ($row = $rs->fetch_assoc()){
										
									
							?>

								<tr>
									<td><?= $_SESSION["Thong_tin_user"]->Hoten ?></td>
									<td><?= $row["NgayLap"] ?></td>
									<td><?= number_format($row["TongTien"]) ?> VND</td>
									<!-- <td><?= $q ?></td> -->
									<td style="margin-right: -20px" title="Xem chi tiết">
										<a class="hvr-shutter-in-vertical hvr-shutter-in-vertical2" style="margin-right: -95px;margin-left: 50px" href="detail-history.php?id=<?= $row["MaHD"] ?>" >
											<span class="glyphicon glyphicon-eye-open"></span>
										</a>
									</td>
									
								</tr>

							<?php 
								}
							}
							else{
								
							 ?>
							<div class="alert alert-danger col-md-12" role="alert" style="margin-top: 15px;margin-left: 0%;">
								<strong>Xin lỗi!</strong> Bạn chưa có giao dịch nào ( Mời bạn <a href="index.<?php  ?>"> mua hàng </a>).
							</div>
					
							<?php
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
	<?php
    include_once 'share/footer.php';
    ?>
</body>
</html>