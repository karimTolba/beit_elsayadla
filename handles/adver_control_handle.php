<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $name = utf8_encode($_POST["name"]);
    $location = utf8_encode($_POST["location"]);
    $adress = utf8_encode($_POST["adress"]);
    $operation_name = utf8_encode($_POST["operation_name"]);
    $tel_ear = utf8_encode($_POST["tel_ear"]);
    $tel_mob = $_POST["tel_mob"];
    $details = utf8_encode($_POST["details"]);
    $pharmacy_image = utf8_encode($_POST["pharmacy_image"]);
    $gov_id = $_POST["gov"];
    $id = $_POST["id"];
    $date_time = $_POST["date_time"];
    
    $sql = "insert into pharmacy_reg (name  , location , adress , tel_ear , tel_mob , operation_name , details , pharmacy_image , date_time , govs_id) values ('$name' , '$location' , '$adress' , '$tel_ear' , '$tel_mob' , '$operation_name' , '$details' , '$pharmacy_image' , '$date_time' , '$gov_id')";

    $sql_2 = "delete from pharmacy_reg_convay where id='$id'";

    $con->query($sql);

    $con->query($sql_2);
    
    $title="لوحة%20التحكم%20وسيط%الصيادلة";

    $place="parts_of_index_page/adver_control.php";

    header("location:../index.php?title=$title&place=$place");


?>