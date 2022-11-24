<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $head = utf8_encode($_POST["head"]);
    $description = utf8_encode($_POST["description"]);
    $news_text = utf8_encode($_POST["news_text"]);

    $date_time = date("Y-m-d h:i:sa");

    $modify_date = date("Y-m-d h:i:sa");

    $image_name = rand().".".explode(".", $_FILES["news_image"]["name"])[1];

    $return_value = move_uploaded_file($_FILES["news_image"]["tmp_name"] , "/home/vpn2w4bl7xr8/public_html/images/".$image_name); 
    
    $sql = "insert into news (head  , description  , news_text , news_image , date_time , modify_date) values ('$head' , '$description' , '$news_text' , '$image_name' , '$date_time' , '$modify_date')";

    $return_value = $con->query($sql);

    $_SESSION["message_successeded"] = "data stored successfully";

    $title="تسجيل الاخبار";

    $place="parts_of_index_page/news.php";

    header("location:../index.php?title=$title&place=$place");
    

?>