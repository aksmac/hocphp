<?php

$u= "";
$p= ""; 
echo $_POST['txtuser'];
echo $_POST['txtpass'];

	if(isset($_POST['ok'])){
		if($_POST['txtuser'] == NULL){
			echo "VUi long nhap ten truy cap <br />";
		}else{
			$u=$_POST['txtuser'];
		}
		if($_POST['txtpass'] == NULL){
			echo " Vui long nhap mat khau <br />";
		}else{
			$p=$_POST['txtpass'];
		}
		if($u && $p){
			// $conn = mysql_connect('localhost','root','');
			// mysql_select_db('hoc_pro1',$conn);
			// $sql= "select * from user where username='$u' and password='$p'";
			// $query=mysql_query($sql);
			//if(mysql_num_rows($query)==0){
			if($u =='admin' && $p =='123456'){
				// echo "Ten truy cap va mat khau khong chinh xac. Vui long nhap lai.";
				setcookie("user","admin",time() + 3600);
				header('location:index.php');
			}else{
				// setcookie("user","admin",time() + 3600);
				// header('location:index.php');
				echo "Ten truy cap va mat khau khong chinh xac. Vui long nhap lai.";
			}
		}
	}


 ?>
<form action="login.php" method="POST">
	username: <input type="text" name="txtuser" size="25" /><br />
	Password: <input type="Password" name="txtpass" size="25" /><br />
	<input type="submit" name="ok" value="Login" />
</form>