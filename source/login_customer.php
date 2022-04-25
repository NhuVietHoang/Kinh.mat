<?php
    require_once("config.php");
    session_start();
    if(isset($_POST['submit'])){
        $name =  $_POST['name'];
        $password = md5($_POST['password']);
        $sql = "select *from customer where name = '$name' AND password = '$password' ";
        $login = mysqli_query($mysqli,$sql);
        if(mysqli_num_rows($login) > 0){
            $_SESSION["name"]= $name;
            $_SESSION["password"]= $password;
            echo "<script> alert('Đăng nhập thành công');window.location='trangchu.php'</script>";
        }
        else{
            echo "<script> alert('nhập sai tài khoản hoặc mật khẩu');window.location='dangnhap.php'</script>";
        }
    }
?>