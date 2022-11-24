<?php

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $id = $_GET["id"];

    $sql = "delete from news where id='$id'";

    $con->query($sql);
    
    $title="استعراض%20الاخبار";

    $place="parts_of_index_page/view_news.php";

    header("location:../index.php?title=$title&place=$place");

?>