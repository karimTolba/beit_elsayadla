<?php

    session_start();

    include_once("../database/database_connection.php");

    $name = $_POST["name"];
    $jop_title = $_POST["jop_title"];
    $location = $_POST["location"];
    $exp_not = $_POST["exp_not"];
    $tel_ear = $_POST["tel_ear"];
    $tel_mob = $_POST["tel_mob"];
    $email = $_POST["email"];
    
    $date_time = date("Y-m-d h:i:sa");

    $sql = "insert into jop_reg (name  , jop_title , location , exp_not , tel_ear , tel_mob , email , date_time) values ('$name' , '$jop_title' , '$location' , '$exp_not' , '$tel_ear' , '$tel_mob' , '$email' , '$date_time')";

    $con->query($sql);
    
    $title="بحث في وظائف";

    $place="parts_of_index_page/jops_reg.php";

    $_SESSION["data_stored"] = "لقد تم تخزين البيانات بنجاح";

    header("location:../index.php?title=$title&place=$place");


?>