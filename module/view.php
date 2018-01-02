<?php if($bool == 1):?>
<h2 class="title text-center"><?=$tennhasanxuat["TenNSX"]?></h2>
<div class="row" style="margin-top: 40px">
  


  <?php
             $id = $_GET["MaNSX"];
            $limit = 6;

            $current_page = 1;
            if (isset($_GET["page"])) {
              $current_page = $_GET["page"];
            }

            $next_page = $current_page + 1;
            $prev_page = $current_page - 1;

            $c_sql = "select count(*) as num_rows from sanpham where NhaSX=$id";
            $c_rs = load($c_sql);
            $c_row = $c_rs->fetch_assoc();
            $num_rows = $c_row["num_rows"];
            $num_pages = ceil($num_rows / $limit);

            if ($current_page < 1 || $current_page > $num_pages) {
              $current_page = 1;
            }

            // $offset = 0;
            $offset = ($current_page - 1) * $limit;
            $sql = "select * ".
            "from sanpham " .
             "where NhaSX = $id ". 
            "LIMIT $offset, $limit";
            $rs = load($sql);
            if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                $a = strlen($row["HinhAnh"]);
                $temp = substr($row["HinhAnh"],strpos($row["HinhAnh"],"/")+1);//strpos lấy phía sau kí tự được chỉ định
                $thumuc = substr($row["HinhAnh"], 0,$a - strlen($temp)-1);
  ?>




  <div align="center" class="col-sm-4">
    <div class="thumbnail">
      <img src="images/<?=$row["HinhAnh"]?>" alt="...">
      <div class="caption">
        <h4><?=$row["TenSP"]?></h4>
        <h4>Giá bán: <?=number_format($row["Gia"])?></h4>
        <p><?=$row["MoTaNgan"]?></p>
          <div align="center">
              <a href="ChiTietSanPham.php?MaSP=<?=$row["MaSP"]?>" class="btn btn-success" role="button">
              <span class="glyphicon glyphicon-ok"></span> Xem chi tiết</a>

              <form method="post" action="addItemToCart.inc.php">
                  <div class="input-group">
                    <input type="hidden" name="txtProID" id="txtProID" value="<?= $row["MaSP"]?>">
                    <input type="hidden" name="txtQuantity" id="txtQuantity" value="1">
                    
                    <span class="input-group-btn">
                     <button class="btn btn-danger" type="submit" name="btnAddItemToCart">Thêm vào giỏ</button>
                    </span>
                  </div>
                </form>
           </div>
      </div>
    </div>
  </div>
    
    <?php 
                }
              }
                else {
              ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    Không có sản phẩm thoả điều kiện.
                  </div>
              <?php
                }
            ?>
</div>
            <?php if ($prev_page > 0) : ?>
              <div class="row">
              <a class="btn btn-primary" href="?MaNSX=<?= $id ?>&page=<?= $prev_page ?>" role="button" style="margin-top: 70px;margin-left: 2%;width: 100px">
                Prev
              </a>
              <br>
              <br>
            <?php endif; ?>
            <?php if ($next_page <= $num_pages) : ?>
              <a class="btn btn-primary" href="?MaNSX=<?= $id ?>&page=<?= $next_page ?>" role="button" style="margin-top: 70px;margin-left: 2%;width: 100px;">
                Next
              </a>
            </div>
              <br>
              <br>
            <?php endif; ?>

<?php endif;?>



<?php if($bool == 2):?>
<h2 class="title text-center"><?=$tenloai["TenLoai"]?></h2>
<div class="row" style="margin-top: 40px">
  <?php
       $id = $_GET["MaLoai"];
            $limit = 6;

            $current_page = 1;
            if (isset($_GET["page"])) {
              $current_page = $_GET["page"];
            }

            $next_page = $current_page + 1;
            $prev_page = $current_page - 1;

            $c_sql = "select count(*) as num_rows from sanpham where LoaiSP=$id";
            $c_rs = load($c_sql);
            $c_row = $c_rs->fetch_assoc();
            $num_rows = $c_row["num_rows"];
            $num_pages = ceil($num_rows / $limit);

            if ($current_page < 1 || $current_page > $num_pages) {
              $current_page = 1;
            }

            // $offset = 0;
            $offset = ($current_page - 1) * $limit;
            $sql = "select * ".
            "from sanpham " .
             "where LoaiSP = $id ". 
            "LIMIT $offset, $limit";
            $rs = load($sql);
            if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                $a = strlen($row["HinhAnh"]);
                $temp = substr($row["HinhAnh"],strpos($row["HinhAnh"],"/")+1);//strpos lấy phía sau kí tự được chỉ định
                $thumuc = substr($row["HinhAnh"], 0,$a - strlen($temp)-1);
  ?>
  <div class="col-sm-4">
    <div align="center" class="thumbnail">
      <img src="images/<?=$row["HinhAnh"]?>" alt="...">
      <div class="caption">
        <h4><?=$row["TenSP"]?></h4>
        <h4>Giá bán: <?=number_format($row["Gia"])?></h4>
        <p><?=$row["MoTaNgan"]?></p>
        <div align="center">
              <a href="ChiTietSanPham.php?MaSP=<?=$row["MaSP"]?>" class="btn btn-success" role="button">
              <span class="glyphicon glyphicon-ok"></span> Xem chi tiết</a>

              <form method="post" action="addItemToCart.inc.php">
                  <div class="input-group">
                    <input type="hidden" name="txtProID" id="txtProID" value="<?= $row["MaSP"]?>">
                    <input type="hidden" name="txtQuantity" id="txtQuantity" value="1">
                    
                    <span class="input-group-btn">
                     <button class="btn btn-danger" type="submit" name="btnAddItemToCart">Thêm vào giỏ</button>
                    </span>
                  </div>
                </form>
           </div>
      </div>
    </div>
  </div>


   <?php 
                }
              }
                else {
              ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    Không có sản phẩm thoả điều kiện.
                  </div>
              <?php
                }
            ?>
</div>
            <?php if ($prev_page > 0) : ?>
              <div class="row" >
              <a class="btn btn-primary" href="?MaLoai=<?= $id?>&page=<?= $prev_page ?>" role="button" style="margin-top: -6px;margin-left: 2%;width: 100px; float: left;">
                Prev
              </a>
              
            <?php endif; ?>
            <?php if ($next_page <= $num_pages) : ?>
              <a class="btn btn-primary" href="?MaLoai=<?= $id?>&page=<?= $next_page ?>" role="button" style="margin-left: 2%;width: 100px;    margin-top: -6px;">
                Next
              </a>
            </div>
            
            <?php endif; ?>

<?php endif;?>