<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css//price-range.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/responsive.css">
</head>
<body>
	<footer>
		<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-4 col-sm-4">
              <div class="footer_dv">
                  <h4><a href="index.php">MapmeStore</a></h4>
                  
                  
                  <p>Liên hệ với chúng tôi</p>
                  <div class="foot-address">
                      <ul>
                        <li><span class="glyphicon glyphicon-map-marker"></span> 01 đường số 8, phường Trường Thọ, quận Thủ Đức, HCM </li>
                        <li><span class="glyphicon glyphicon-envelope"></span> mapmestore@gmail.com </li>
                        <li><span class="glyphicon glyphicon-earphone"></span> +841638469858 </li>
                    
                      </ul>
                 </div> 
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="footer_dv">
                  <h4>Loại sản phẩm</h4>
                  <div class="line-dash"></div>
                  <ul>
                      <?php
                        $sql = "select * from loaixe";
                        $list = load($sql);
                        while($row = $list->fetch_assoc()):
                      ?>
                      <li><a class="a-font" href="./view.php?MaLoai=<?=$row["MaLoai"]?>"><?= $row["TenLoai"] ?></a></li>
                      <?php endwhile; ?>
                  </ul>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="footer_dv">
                  <h4>Nhà sản xuất</h4>
                  <div class="line-dash"></div>
                  <ul>
                      <?php
                        $sql = "select * from nhasanxuat";
                        $list = load($sql);
                        while($row = $list->fetch_assoc()):
                      ?>
                      <li><a class="a-font" href="./view.php?MaNSX=<?=$row["MaNSX"]?>"><?= $row["TenNSX"] ?></a></li>
                      <?php endwhile; ?>
                  </ul>
              </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="footer_dv">
                  <h4>Về chúng tôi</h4>
                  <div class="line-dash"></div>
                  <ul>
                      <li><a class="a-font" href="#">Giới thiệu MapmeStore</a></li>
                      <li><a class="a-font" href="#">Chính sách đổi trả</a></li>
                      <li><a class="a-font" href="#">Quy chế hoạt động</a></li>
                      <li><a class="a-font" href="#">Hệ thống cửa hàng</a></li>
                      
                  </ul>
              </div>
          </div>

        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
  <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <p class="pull-left" style="color: white; text-align: center;">Copyright © 2018 01-Group 15CK4 HCMUS FIT-HCMUS</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>
	</footer>
	<!--/Footer-->
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/jquery.scrollUp.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/price-range.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/jquery.prettyPhoto.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/main.js"></script>
</body>
</html>