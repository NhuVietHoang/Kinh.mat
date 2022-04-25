<?php 
require_once("config.php");
session_start();
$sql = "select * from trademark";
$result = mysqli_query($mysqli,$sql);
?>
<div id="id-logo" class="logo">
        <a href="trangchu.php"><img class="matviet" src="image/logo.png"></a>
        <div class="menu">
            <ul class="ul1">
                <li class="li1"><a href="thuonghieu.php">Thương hiệu</a>
                    <ul class="ul2 ul2-thuonghieu">
                        <?php
                            foreach($result as $res){?>
                                 <li class="li2"><?php echo $res['name_trademark'] ?></li>
                           <?php }
                        ?>
                    </ul>
                </li>
                <li class="li1"><a href="trongkinh.php">Tròng kính</a>
                    <ul class="ul2 ul2-trongkinh">
                        <li class="li2">Đơn tròng Crizal</li>
                        <li class="li2">Đơn tròng Essilor</li>
                        <li class="li2">Đơn tròng Varilux</li>
                        <li class="li2">Đơn tròng Transitions</li>
                    </ul>
                </li>
                <li class="li1"><a href="thiluc.php">Thị lực</a>
                    <ul class="ul2 ul2-thiluc">
                        <li class="li2">Tiêu chuẩn đo mắt</li>
                        <li class="li2">Đăng ký đo mắt</li>
                    </ul>
                </li>
                <li class="li1"><a href="sanpham.php">Sản Phẩm</a></li>
                <li class="li1"><a href="thanhtoan.php">Hương dẫn mua hàng</a></li>
                <li class="li1"><a href="gioithieu.php">Giới thiệu</a></li>
            </ul>

        </div>
        <div class="search">
            <input class="thanh-tim-kiem" type="text" placeholder="Tìm kiếm...">
            <img class="timkiem" src="image/search.png">
        </div>
        <?php 
            if(isset($_SESSION["name"])){?>
                <div class="dangnhap"><a href=""><?php echo $_SESSION["name"] ?></a> /</div>
               
                <div class="dangnhap"><a href="logout_customer.php">Đăng Xuất</a></div>
          <?php  }else{?>
            <div class="dangnhap"><a href="dangnhap.php">Đăng nhập</a> /</div>
            <div class="dangnhap"><a href="dangky.php">Đăng ký</a></div>
         <?php }
        ?>
        <!-- <div class="dangnhap"><a href="dangnhap.php">Đăng nhập</a> /</div>
        <div class="dangnhap"><a href="dangky.php">Đăng ký</a></div> -->
    </div>
    <div class="tim-cua-hang">
        <img src="image/tim.png">
    </div>
    <div class="do-mat">
        <p class="mat1">Đo mắt miễn phí</p>
        <img src="image/do.png">
    </div>