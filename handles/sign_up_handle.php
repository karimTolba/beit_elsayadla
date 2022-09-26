<?php

include_once("../database/database_connection.php");

session_start();

$user_name = $_POST["user_name"];
$password = $_POST["password"];
$switch = false;


$sql = "select user_name from users";

$result = ($con->query($sql))->fetch_all(MYSQLI_ASSOC);


foreach($result as $results){

    if($user_name == $results["user_name"])
        $switch = true;


}

if($switch){

    $message_user_repeated = "user_name $user_name is exist choose another one";

    $_SESSION["message_user_repeated"] = $message_user_repeated;

    $title="تسجيل%20في%20الموقع";

    $place="parts_of_index_page/sign_up.php";

    header("location:../index.php?title=$title&place=$place");


}

    

else{

    $permetion_id = 2;

    $sql = "insert into users (user_name  , password , permetion_id) values ('$user_name' , '$password' , '$permetion_id')";

    $return_value = $con->query($sql);

    if($return_value)
        $_SESSION["user_name"] = $user_name;

    $title="الرئيسية";

    $place="parts_of_index_page/home_page.php";

    header("location:../index.php?title=$title&place=$place");



}

    


?>

