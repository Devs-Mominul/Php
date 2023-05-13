<?php
include("./data_connect.php") ;
?>

<?php
$name=htmlspecialchars(trim($_POST["name"]));
$email=htmlspecialchars(trim($_POST["email"]));
$password=htmlspecialchars(trim($_POST["password"]));
$role=htmlspecialchars(trim($_POST["role"]));
$db_data_insert="INSERT INTO  users (name,email,password,role) VALUES ('$name','$email','sha1($password)','$role')";
$add_just=mysqli_query($db_connect,$db_data_insert);
print_r($add_just);
if(!$db_connect){
    die("connect is fail" . mysqli_connect_error());
}else{
    echo "connect is sucessful";
}

?>