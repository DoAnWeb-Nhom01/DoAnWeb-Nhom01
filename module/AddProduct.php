<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-lg-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sản phẩm mới</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label for="txtProName" class="col-sm-2 control-label">Sản phẩm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtProName" name="txtProName" placeholder="Tên sản phẩm" required>
								</div>
							</div>
							<div class="form-group">
								<label for="txtTinyDes" class="col-sm-2 control-label">Mô tả</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTinyDes" name="txtTinyDes" placeholder="Mô tả ngắn" required >
								</div>
							</div>
							<div class="form-group">
								<label for="txtPrice" class="col-sm-2 control-label">Giá</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="Nhập giá" required>
								</div>
							</div>
							<div class="form-group">
								<label for="selCatID" class="col-sm-2 control-label">Loại sản phẩm</label>
								<div class="col-sm-10">
									<select id="selCatID" name="selCatID" class="form-control">
										<?php 
											$sql = "select * from loaisanpham";
											$rs = load($sql);
											while ($row = $rs->fetch_assoc()) :
										?>
											<option value="<?= $row["MaLoai"] ?>"><?= $row["TenLoai"] ?></option>
										<?php endwhile; ?>
									</select>
								</div>
							</div>
			 				<div class="form-group">
								<label for="selManID" class="col-sm-2 control-label">Nhà sản xuất</label>
								<div class="col-sm-10">
									<select id="selManID" name="selManID" class="form-control">
										<?php 
											$sql = "select * from nhasanxuat";
											$rs = load($sql);
											while ($row = $rs->fetch_assoc()) :
										?>
											<option value="<?= $row["MaNSX"] ?>"><?= $row["TenNSX"] ?></option>
										<?php endwhile; ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtQuantity" class="col-sm-2 control-label">Số lượng</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtQuantity" name="txtQuantity" placeholder="Nhập số lượng" required>
								</div>
							</div>
							<div class="form-group">
								<label for="txtPrice" class="col-sm-2 control-label">Xuất xứ</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtXuatxu" name="txtXuatxu" placeholder="Nhập xuất xứ" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="txtFullDes" class="col-sm-2 control-label">Chi tiết</label>
								<div class="col-sm-10">
									<textarea rows="6" id="txtFullDes" name="txtFullDes" class="form-control" required></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label for="fuMain" class="col-sm-2 control-label">Hình ảnh</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="fuMain" name="fuMain" required >
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button name="btnSave" type="submit" >Lưu</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
	<script src="assets/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
		    selector: '#txtFullDes',
		    menubar: false,
		    toolbar1: "styleselect | bold italic | link image | alignleft aligncenter alignright | bullist numlist | fontselect | fontsizeselect | forecolor backcolor",
		    // toolbar2: "",
		    // plugins: 'link image textcolor',
		    //height: 300,
		    // encoding: "xml",
		});
	</script>
</body>
</html>