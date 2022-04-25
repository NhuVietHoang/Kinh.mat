<?php 
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo "<script>alert('Đăng xuất thành công');window.location='trangchu.php'</script>";
}
