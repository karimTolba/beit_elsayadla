<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $name = utf8_encode($_POST["name"]);
    $location = utf8_encode($_POST["location"]);
    $adress = utf8_encode($_POST["adress"]);
    $tel_mob = utf8_encode($_POST["tel_mob"]);
    $operation_name = utf8_encode($_POST["operation_name"]);
    $details = utf8_encode($_POST["details"]);
    $gov_id = $_POST["gov"];

    $date_time = date("Y-m-d h:i:sa");

    if(empty($_POST["tel_ear"]))
        $tel_ear = utf8_encode("لا يوجد");
    else
        $tel_ear = $_POST["tel_ear"];    

    $image_name
     = rand().".".explode(".", $_FILES["pharmacy_image"]["name"])[1];

    $return_value =move_uploaded_file($_FILES["pharmacy_image"]["tmp_name"] , "/home/vpn2w4bl7xr8/public_html/images/".$image_name);

    $sql = "insert into pharmacy_reg_convay (name  , location  , adress , tel_ear , tel_mob , operation_name , details , pharmacy_image,date_time , govs_id) values ('$name' , '$location' , '$adress' , '$tel_ear' , '$tel_mob' , '$operation_name' , '$details' , '$image_name' , '$date_time' , '$gov_id')";

    $return_value = $con->query($sql);

    $_SESSION["data_stored"] = "لقد تم تخزين البيانات بنجاح";

    $title="تسجيل صيدلية";

    $place="parts_of_index_page/adver_reg.php";

    header("location:../index.php?title=$title&place=$place");

?>