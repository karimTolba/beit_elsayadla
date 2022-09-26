<?php 

include_once("../database/database_connection.php");

session_start();

$user_name = $_POST["user_name"];

$password = $_POST["password"];

$switch = false;

$user_id = 0;

$sql = "select id , user_name , password from users";

$result = ($con->query($sql))->fetch_all(MYSQLI_ASSOC);

foreach($result as $results){

    if($results["user_name"] == $user_name && $results["password"] == $password){
        $switch = true;
        $user_id = $results["id"];
    }    


}


if($switch){

    $_SESSION["user_id"] = $user_id;

    $title="الرئيسية";

    $place="parts_of_index_page/home_page.php";

    header("location:../index.php?title=$title&place=$place");

}
else{

    $_SESSION["login_failed"] = "user name or password is incorrect";

    $title="تسجيل دخول";

    $place="parts_of_index_page/login_page.php";

    header("location:../index.php?title=$title&place=$place");



}

?>