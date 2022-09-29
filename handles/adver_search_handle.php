<?php

    session_start();

    include_once("../database/database_connection.php");

    $operation_name = $_POST["operation_name"];
    $location = $_POST["location"];

    $sql = "select id , name , adress from pharmacy_reg where operation_name = '$operation_name' and location = '$location' order by id desc";

    $return_value = $con->query($sql);
    
    if($return_value->num_rows > 0){

        $results = $return_value->fetch_all(MYSQLI_ASSOC);

        $_SESSION["results"] = $results;

        $title="يحث في الوسيط";

        $place="parts_of_index_page/adver_search.php";

        header("location:../index.php?title=$title&place=$place");

    }
    else{

        $title="يحث في الوسيط";

        $place="parts_of_index_page/adver_search.php";

        $_SESSION["no_results"] = "لا يوجد نتائج مطابقة للبحث";

        header("location:../index.php?title=$title&place=$place");


    }    

?>