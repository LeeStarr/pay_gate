<?php 
require 'connect.php';
$id=1;
$sql="select * from products where id=?;";

$statment=mysqli_stmt_init($connect);

if(!mysqli_stmt_prepare($statment,$sql)){
    header("Location: pay.php?error=sql_error");//showroom
    exit();
}else{
mysqli_stmt_bind_param($statment,"s",$id);
mysqli_stmt_execute($statment);
$result=mysqli_stmt_get_result($statment);

if($row= mysqli_fetch_assoc($result))
{
    session_start();
    $_SESSION['picture']=$row['image_of_car01'];
    $_SESSION['name']=$row['name'];
    $_SESSION['price']=$row['once_off_price'];
    $_SESSION['transmission']=$row['transmission'];
    $_SESSION['fuel_type']=$row['fuel_type'];
    $_SESSION['year']=$row['year'];
    $_SESSION['engine']=$row['engine'];
    header("Location: paygate.php");
    exit;
}
}
?>