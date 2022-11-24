<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $name = utf8_encode($_POST["name"]);
    $jop_title = utf8_encode($_POST["jop_title"]);
    $location = utf8_encode($_POST["location"]);
    $exp_not = utf8_encode($_POST["exp_not"]);
    $tel_mob = utf8_encode($_POST["tel_mob"]);
    $email = utf8_encode($_POST["email"]);
    $gov_id = $_POST["gov"];
    $date_time = date("Y-m-d h:i:sa");    

    if(empty($_POST["tel_ear"]))
        $tel_ear = utf8_encode("لايوجد");
    else
        $tel_ear = $_POST["tel_ear"];    

    $sql = "insert into jop_reg_convay (name  , jop_title , location , exp_not , tel_ear , tel_mob , email , date_time , govs_id) values ('$name' , '$jop_title' , '$location' , '$exp_not' , '$tel_ear' , '$tel_mob' , '$email' , '$date_time' , '$gov_id')";

    $con->query($sql);
    
    $title="بحث في وظائف";

    $place="parts_of_index_page/jops_reg.php";

    $_SESSION["data_stored"] = "لقد تم تخزين البيانات بنجاح";

    header("location:../index.php?title=$title&place=$place");


?>