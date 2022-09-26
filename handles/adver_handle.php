<?php

    session_start();

    include_once("../database/database_connection.php");

    $name = $_POST["name"];
    $location = $_POST["location"];
    $adress = $_POST["adress"];
    $tel_ear = $_POST["tel_ear"];
    $operation_name = $_POST["operation_name"];
    $details = $_POST["details"];

    $date_time = date("Y-m-d h:i:sa");

    $image_name
     = rand().".".explode(".", $_FILES["pharmacy_image"]["name"])[1];

    $return_value =move_uploaded_file($_FILES["pharmacy_image"]["tmp_name"] , "C:\\xampp\htdocs\project\images\\".$image_name);

    $sql = "insert into pharmacy_reg (name  , location  , adress , tel_ear , operation_name , details , pharmacy_image,date_time) values ('$name' , '$location' , '$adress' , '$tel_ear' ,'$operation_name' , '$details' , '$image_name' , '$date_time')";

    $return_value = $con->query($sql);

    $_SESSION["data_stored"] = "data stored successfully";

    $title="تسجيل صيدلية";

    $place="parts_of_index_page/adver_reg.php";

    header("location:../index.php?title=$title&place=$place");

?>