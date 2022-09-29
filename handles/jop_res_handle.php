<?php

    session_start();

    include_once("../database/database_connection.php");

    $jop_title = $_POST["jop_title"];
    $location = $_POST["location"];

    $sql = "select id , name , exp_not from jop_reg where jop_title = '$jop_title' and location = '$location' order by id desc";

    $return_value = $con->query($sql);
    
    if($return_value->num_rows > 0){

        $results = $return_value->fetch_all(MYSQLI_ASSOC);

        $_SESSION["results"] = $results;

        $title="بحث في الظائف";

        $place="parts_of_index_page/jops_search.php";

        header("location:../index.php?title=$title&place=$place");

    }
    else{

        $title="بحث في الظائف";

        $place="parts_of_index_page/jops_search.php";

        $_SESSION["no_results"] = "لا يوجد نتائج مطابقة للبحث";

        header("location:../index.php?title=$title&place=$place");


    }    

?>