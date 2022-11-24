<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $operation_name = utf8_encode($_POST["operation_name"]);
    $location = utf8_encode($_POST["location"]);
    $gov_id = $_POST["gov"];

    $sql = "select id , name , adress from pharmacy_reg where operation_name = '$operation_name' and location = '$location' and govs_id = '$gov_id' order by id desc";

    $return_value = $con->query($sql);
    
    if($return_value->num_rows > 0){

        $results = [];

        while($data = $return_value->fetch_assoc()){

            array_push($results , $data);

        }
    
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