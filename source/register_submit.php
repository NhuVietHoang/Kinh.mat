<?php 
    require_once("config.php");
    
    if(isset($_POST["submit"])){
            $name    = $_POST['name'];
			$phone   = $_POST['phone'];
			$address = $_POST['address'];
			$password= md5($_POST['password']);
           
            $sql= "select *from customer where name = '$name'or phone = '$phone'";
            $old = mysqli_query($mysqli, $sql);
           
            if(mysqli_num_rows($old)>0){
                header("location:dangky.php");
            }
			$register = "insert into customer(name, phone, address, password) values('$name','$phone','$address','$password')";
			mysqli_query($mysqli,$register);
           
            echo "<script> alert('Đăng ký thành công');window.location='dangky.php'</script>";
    }
    else{
        header("location:dangky.php");
    }
 
?>