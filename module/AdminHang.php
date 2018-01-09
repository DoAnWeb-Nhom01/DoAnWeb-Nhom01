<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="">
</head>
<body>
	<h3 class="future" style="width: 782px;margin: 0px auto; text-align: center; color: blue;" >QUẢN LÝ NHÀ SẢN XUẤT</h3>
	<div class="container-fluid" style="margin-left: 35%;margin-top: 20px; margin-bottom: 150px">
		
		<div class="row">

			<div class="col-md-6">

				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Hãng</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php //thao tac doc dữ liệu
						$sql = "select * from nhasanxuat";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["MaNSX"] ?></td>
								<td><?= $row["TenNSX"] ?></td>
								<td class="text-right">
									<a class="btn btn-default btn-xs" href="module/manufacturer_edit.php?id=<?= $row["MaNSX"] ?>" role="button">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a class="btn btn-danger btn-xs" href="module/manufacturer_delete.php?id=<?= $row["MaNSX"] ?>" role="button">
										<span class="glyphicon glyphicon-remove"></span>
									</a>
								</td>
							</tr>
					<?php
						endwhile;
					?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-primary" href="module/manufacturer_add.php" role="button">
					<span class="glyphicon glyphicon-plus"></span>
					Thêm nhà sản xuất
				</a>
			</div>
		</div>
	</div>
	<script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>