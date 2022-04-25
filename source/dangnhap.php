<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="shortcut icon" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="css/logo.css">
	<link rel="stylesheet" type="text/css" href="css/dangky.css">
	<script type="text/javascript" src="css/jquery.js"></script>
	<style>
		body{
			background-image: url(image/layer3.jpg);
		}
	</style>
</head>
<body>
	<?php 
        include("menu.php");
    ?>
	<form action="login_customer.php" class="formdk" method="POST">
		<div class="bao"><div class="logo1"><img class="logo-img" src="image/logo.png"></div></div>
		<h2>Đăng Nhập</h2>
		<input id="id-value1" name="name" class="f-input" type="text" placeholder="Username" value="" required>
		<input id="id-value2" name="password" class="f-input" type="password" placeholder="Password" value="" required>
		<div class="nho">
			<div id="id-switch" class="switch">
				<div id="id-click1" class="click1"></div>
				<div id="id-click2" class="click2"></div>
			</div>
			<div class="rmb">Nhớ mật khẩu</div>
		</div>
		<input type="submit" class="btn-dangnhap" name="submit" value="login">
		<!-- <button id="id-dangnhap" class="btn-dangnhap" type="submit"><a id="id-trangchu" href="trangchu.html">Đăng Nhập</a></button> -->
		<div class="dangky1">Bạn chưa có tài khoản <a href="dangky.php">Đăng Ký</a></div>
		
	</form>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#id-click1').click(()=>{
				$('#id-click1').hide();
				$('#id-click2').show();
				$('#id-switch').css("background-color","#ecdd55e8");
			})
			$('#id-click2').click(()=>{
				$('#id-click2').hide();
				$('#id-click1').show();
				$('#id-switch').css("background-color","#c6c6c6");
			})
			$('#id-value1').click(()=>{
				$('#id-value1').attr("value","");
			})
			$('#id-value2').click(()=>{
				$('#id-value2').attr("value","");
			})
			// $('#id-dangnhap').click(()=>{
				
			// 	if(document.getElementById("id-value1").value=='taikhoan'){
			// 		$(location).attr("href","trangchu.html");
			// 	}
			// 	else{
			// 		$('#id-trangchu').attr("href","#");
			// 		alert('tài khoản hoặc mật khẩu không chính xác');
			// 	}
			// })
		})
	</script>
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
					<span class="fp2">19001003</span>
				</div>
				<div class="fp">
					<span class="fp1">Email :</span>
					<span class="fp2">cuongcc1234@gmail.com</span>
				</div>
			
				
				<div class="fp">
					<span class="fp1">Địa chỉ :</span>
					<div class="fp2">235 Hoàng Quốc Việt,Cầu Giấy, Hà nội </div>
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