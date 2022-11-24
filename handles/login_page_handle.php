<?php 

include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

session_start();

$user_name = $_POST["user_name"];

$password = $_POST["password"];

$switch = false;

$user_id = 0;


$sql = "select id , user_name , password from users";

$result = [];

$return_value = $con->query($sql);

while($data = $return_value->fetch_assoc()){

    array_push($result , $data);

}

foreach($result as $results){

    if($results["user_name"] == $user_name && $results["password"] == $password){
        $switch = true;
        $user_id = $results["id"];
    }    


}

if($switch){

    if($user_id == 1){

        $_SESSION["user_id"] = $user_id;

        $title="لوحة التحكم";

        $place="parts_of_index_page/control_panel.php";
    
        header("location:../index.php?title=$title&place=$place");

    }
    else{

        $_SESSION["user_id"] = $user_id;

        $title="الرئيسية";

        $place="parts_of_index_page/home_page.php";

        header("location:../index.php?title=$title&place=$place");

    }

}
else{

    $_SESSION["login_failed"] = "user name or password is incorrect";

    $title="تسجيل دخول";

    $place="parts_of_index_page/login_page.php";

    header("location:../index.php?title=$title&place=$place");



}

?>