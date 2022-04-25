<!DOCTYPE html>
<html>
<head>
	<title>Sản Phẩm</title>
	<link rel="shortcut icon" href="css/image/logo.png">
	<link rel="stylesheet" type="text/css" href="css/logo.css">
	<link rel="stylesheet" type="text/css" href="css/sanpham.css">
	<?php 
		require_once("config.php");
		$sql         = "select * from categories";
		$result      = mysqli_query($mysqli,$sql);
		$sqlproducts = "select * from products";
		$products    = mysqli_query($mysqli,$sqlproducts); 
	?>
</head>
<body>
	<?php 
		include("menu.php");
	?>
	<div class="container">
		
		<div class="lay">
			<div class="gia">
				<div class="mn mn-vt0">
				<ul>LỌC THEO
					<?php 
						foreach($result as $res){?>
							<li><?php  echo $res['name_trademark'] ?></li>
						<?php }
					?>
					
				</ul>
			</div>
			</div>
			<img class="lay1" src="image/k12.jpg">
		</div>
		<div class="sanpham">
			<div class="mn mn-vt1">
				<ul>CÁC CHUYÊN MỤC
					<li>Chăm sóc mắt</li>
					<li>Chương Trình Ưu Đãi</li>
					<li>Giải pháp thị lực</li>
					<li>Hình Ảnh Hệ Thống Cửa Hàng</li>
					<li>Những tình trạng của mắt</li>
					<li>Thương hiệu Tròng Kính</li>
					<li>Tìm Hiểu Về Thị Lực</li>
					<li>Tin Tức Cập Nhật</li>
				</ul>
			</div>

			<?php 
				foreach($products as $product){?>
				<div class="sp1">
					<img class="pic1" src="image/<?php echo $product['image']?>">
					<img class="pic2" src="image/<?php echo $product['image_model']?>">
					<p class="p1"><?php echo $product['name']?></p>
					<p class="p2"><?php echo number_format($product['unit_price'])?>đ</p>
					<div class="cl">
						<div class="cl1"></div>
						<div class="cl2"></div>
					</div>
					<div class="op">
						
						<a href="" style="color: white;" class="op1" >mua nhanh</a>
						<div class="op0" ></div>
						<a href="" style="color: white;"  class="op1"> xem ngay </a>
						<!-- <div  class="op1">xem chi tiết</div> -->
					</div>
				</div>	

			<?php	}
			?>
		
			<div class="chuyentrang">
				<div class="n1">1</div>
				<div class="n1">2</div>
				<div class="n1">3</div>
				<div class="n1">4</div>
				<div class="n1">5</div>
				<div class="n1">6</div>
				<div class="n1">7</div>
				<div class="n1">></div>
			</div>
		</div>
	</div>
	<div class="foot">
		<div class="footer">
			<div class="f1">
				<img src="image/logo2.png">
				<div class="fp">
					<span class="fp1">Số điện thoại :</span>
					<span class="fp2">0968940243</span>
				</div>
				<div class="fp">
					<span class="fp1">Hotline :</span>
					<span class="fp2">1900111</span>
				</div>
				<div class="fp">
					<span class="fp1">Email :</span>
					<span class="fp2">cuongcc1234@gmail.com</span>
				</div>
				
				<div class="fp">
					<span class="fp1">Địa chỉ :</span>
					<div class="fp2">234 Hoàng Quốc Việt,Cầu Giấy, Hà Nội</div>
				</div>
			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">VỀ MẮT VIỆT</p>
				</div>
				<div class="fp">
					<span class="fp1">Giới thiệu Mắt Việt</span>
				</div>
				<div class="fp">
					<span class="fp1">Tầm nhìn - Sứ mệnh</span>
				</div>
				<div class="fp">
					<span class="fp1">Tuyển dụng</span>
				</div>
				<div class="fp">
					<span class="fp1">Hệ thông cửa hàng</span>
				</div>
			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">CHÍNH SÁCH VÀ DỊCH VỤ</p>
				</div>
				<div class="fp">
					<span class="fp1">Chính sách</span>
				</div>

				<div class="fp">
					<div class="fp2">Chính sách và Quy định chung</div>
				</div>
				<div class="fp">
					<div class="fp2">Quy định và Hình thức thanh toán</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách Vận Chuyển và Giao Nhận</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách bảo hành</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách đổi trả và hoàn tiền</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách bảo vệ thông tin cá nhân của người tiêu dùng</div>
				</div>
				<div class="fp">
					<span class="fp1">ĐO KHÁM MẮT</span>
				</div>
				<div class="fp">
					<span class="fp2">Đăng ký lịch</span>
					<span class="fp2">Tìm cửa hàng</span>
				</div>
				<div class="fp">
					<span class="fp1">THƯƠNG HIỆU</span>
				</div>
				<div class="fp">
					<span class="fp2">rayban</span>
					<span class="fp2">oakley</span>
					<span class="fp2">bolon</span>
					<span class="fp2">burberry</span>
				</div>


			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">THỜI GIAN LÀM VIỆC</p>
				</div>
				<div class="fp">
					<div class="fp1">Tất cả các ngày trong tuần trên toàn hệ thống của hàng Mắt Việt. ( chi tiết thời gian mở của của các cửa hàng: tại đây)
					Sala Mắt Việt</div>
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>