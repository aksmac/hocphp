<?php 
// $name = $_FILES['hinh']['name'];
// $tmp_name = $_FILES['hinh']['tmp_name'];
// $size_img = $_FILES['hinh']['size'];
// $type_img = $_FILES['hinh']['type'];
// var_dump($name);
// //print_r($_FILE['image']);
// if($name != NULL){
// 	move_uploaded_file($tmp_name, "./data/".$name);

// 	echo "Upload thành công";
// 	echo "Thông tìn file vừa uplaod:";
// 	echo "Tên file: ".$name;
// 	echo "Cỡ file: ".$size_img;
// 	echo "Kiểu file: ".$type_img;
// }else{
// 	echo "Vui lòng chọn file cần upload";
// }

echo "<pre>";
print_r($_FILES);
echo "</pre>";


 ?>