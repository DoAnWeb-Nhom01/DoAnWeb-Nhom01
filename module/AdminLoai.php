<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lí loại sản phẩm</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3 class="future" style="width: 782px;margin: 0px auto; text-align: center; color: blue;" >QUẢN LÝ LOẠI</h3>
	<div class="container-fluid" style="margin-left: 35%;margin-top: 20px; margin-bottom: 150px">
		
		<div class="row">

			<div class="col-md-6">

				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Loại</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php //thao tac doc dữ liệu
						$sql = "select * from loaisanpham";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["MaLoai"] ?></td>
								<td><?= $row["TenLoai"] ?></td>
								<td class="text-right">
									<a class="btn btn-default btn-xs" href="module/category_edit.php?id=<?= $row["MaLoai"] ?>" role="button">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a class="btn btn-danger btn-xs" href="module/category_delete.php?id=<?= $row["MaLoai"] ?>" role="button">
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
				<a class="btn btn-primary" href="module/category_add.php" role="button">
					<span class="glyphicon glyphicon-plus"></span>
					Thêm danh mục
				</a>
			</div>
		</div>
	</div>
	<script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>