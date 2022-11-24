<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $name = utf8_encode($_POST["name"]);
    $jop_title = utf8_encode($_POST["jop_title"]);
    $location = utf8_encode($_POST["location"]);
    $exp_not = utf8_encode($_POST["exp_not"]);
    $tel_ear = utf8_encode($_POST["tel_ear"]);
    $tel_mob = utf8_encode($_POST["tel_mob"]);
    $email = utf8_encode($_POST["email"]);
    $gov_id = $_POST["gov"];
    $id = $_POST["id"];
    $date_time = $_POST["date_time"];
    
    $sql = "insert into jop_reg (name  , jop_title , location , exp_not , tel_ear , tel_mob , email , date_time , govs_id) values ('$name' , '$jop_title' , '$location' , '$exp_not' , '$tel_ear' , '$tel_mob' , '$email' , '$date_time' , '$gov_id')";

    $sql_2 = "delete from jop_reg_convay where id='$id'";

    $con->query($sql);

    $con->query($sql_2);
    
    $title="لوحة%20تحكم%20وظائف";

    $place="parts_of_index_page/jops_control.php";

    header("location:../index.php?title=$title&place=$place");


?>