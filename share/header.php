<?php
	require_once'cart.inc';
	if(!isset($_SESSION["Da_Dang_Nhap"]))
	{
		$_SESSION["Da_Dang_Nhap"] = 0;
	}
	if($_SESSION["Da_Dang_Nhap"]==0)
	{
		if(isset($_COOKIE["luu_Dang_nhap"]))
		{
			//tái tạo session
			$_SESSION["Da_Dang_Nhap"] = 1;
			$uname = $_COOKIE["luu_Dang_nhap"];
			$sql = "select * from user where Username = '$uname'";
			$li = load($sql);
			$_SESSION["Thong_tin_user"] = $li->fetch_object();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$tilte;?></title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css//price-range.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/responsive.css">
	
	
</head>
<body class="bgpage">
<div class="container">
	
	<!-- <?php include_once $edit;
	 ?> -->
	
<style>
body {
    padding-top: 50px;
}
.color-link{
    background-color: red;
    color: white !important;
}
.color-link:hover{
    color: black !important;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="index.php">MapmeStore</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                <ul class="nav navbar-nav collapse navbar-collapse">

                			



						 	<li class="dropdown">
									<?php if($_SESSION["Da_Dang_Nhap"]==2) :?>
									<a href="#"></span> QUẢN TRỊ </a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Add-products.php"> QUẢN LÝ SẢN PHẨM</a></li>
                                        <li><a href="Admin_Loai.php">QUẢN LÝ LOẠI SẢN PHẨM</a></li>
										<li><a href="Admin_Hang.php">QUẢN LÝ NHÀ SẢN XUẤT</a></li> 
										
                                    </ul>
                                     <?php endif; ?>
                                </li>

						 	



								<li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge"><?= get_total_items() ?></span></a></li>
								<li class="dropdown">
									<?php if($_SESSION["Da_Dang_Nhap"]!=0) :?>
									<a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION["Thong_tin_user"]->Hoten;?></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Thông tin cá nhân</a></li>
                                        <li><a href="history.php"><span class="glyphicon glyphicon-list-alt"></span> Lịch sử mua hàng</a></li>
										<li><a href="DoiMatKhau.php"><span class="glyphicon glyphicon-lock"></span> Đổi mật khẩu</a></li> 
										<li><a href="Logout.php"><span class="glyphicon glyphicon-off"></span> Đăng xuất</a></li> 
                                    </ul>
                                     <?php endif; if($_SESSION["Da_Dang_Nhap"]==0) :?>
			        <a href="DangNhap.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a>
		        <?php endif;?>
                                </li>
							</ul>
                </li>
            </ul>
            <div class="search">
	    	 	<form class="navbar-form navbar-left" name="fsearch" id="fsearch" method="POST" action="TimKiemSanPham.php">
	       		 	<div class="form-group">
	   		        	<input style="width: 300px" type="text" class="form-control" placeholder="Tìm kiếm..." name="txtSearch" id="txtSearch">
	   			   	</div>
	  			    <button class="btn btn-default" type="submit" name="btnSearch" id="btnSearch">
	  			    	<i class="glyphicon glyphicon-search"></i>
	  			    </button>
	    		</form>	
  			</div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                <li class="dropdown "><a style="cursor: pointer;">Nhà sản xuất</a>
                        <ul role="menu" class="sub-menu" >
                          <?php
	          				$sql = "select * from nhasanxuat";
	          				$list = load($sql);
	          				while($row = $list->fetch_assoc()):
	          		   	?>
	          			  <li><a href="view.php?MaNSX=<?=$row["MaNSX"]?>"><?= $row["TenNSX"] ?></a></li>
	          			  <?php endwhile; ?>
                     </ul>
                 </ul>
                  <ul class="nav navbar-nav">
               <li class="dropdown"><a style="cursor: pointer;">Loại sản phẩm</a>
                    <ul role="menu" class="sub-menu">
               	<?php
	          		$sql = "select * from loaisanpham";
	          		$list = load($sql);
	          		while($row = $list->fetch_assoc()):
	          	?>
	            <li><a href="view.php?MaLoai=<?=$row["MaLoai"]?>"><?= $row["TenLoai"] ?></a></li>
	            <?php endwhile; ?>
                     </ul>
                    </li> 
               </li>
            </ul>
             
        </div><!--/.nav-collapse -->
    </div>
</div>
</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/jquery.scrollUp.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/price-range.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/jquery.prettyPhoto.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/main.js"></script>
	<script type="text/javascript">
		var ht = fedit.txtHoTen.value;
		var ngay = fedit.ngay.value;
		var thang =fedit.thang.value;
		var nam = fedit.nam.value;
		var gt = fedit.sel1.value;
		var cmt = fedit.txtCMND.value;
		var dc = fedit.txtDiaChi.value;
		function KiemTraCapNhat() {
			if(fedit.txtHoTen.value == "")
			{
				alert("Họ tên không được để trống");
				return false;
			}
			if(fedit.ngay.value == ngay && fedit.thang.value == thang && fedit.nam.value == nam && fedit.txtHoTen.value == ht && fedit.sel1.value == gt && fedit.txtCMND.value == cmt && fedit.txtDiaChi.value == dc)
			{
				alert("Không có gì được thay đổi");
				return false;
			}
			if(isNaN(fedit.txtCMND.value))
			{
				alert("Chứng minh thư không hợp lệ");
				return false;
			}
			return true;
		}
		function KiemTraDMK()
		{
			if(feditmk.txtMKCu.value == "")
			{
				alert("Chưa nhập mật khẩu cũ");
				return false;
			}
			if(feditmk.txtMKmoi.value.length < 6)
			{
				alert("Mật khẩu mới quá ngắn");
				return false;
			}
			if(feditmk.txtMKCu.value == feditmk.txtMKmoi.value)
			{
				alert("Mật khẩu mới trùng mật khẩu cũ");
				return false;
			}
			if(feditmk.txtMKmoi.value != feditmk.txtLapMKmoi.value)
			{
				alert("Mật khẩu lặp lại không đúng");
				return false;
			}
			return true;
		}
	</script>
</body>
</html>


