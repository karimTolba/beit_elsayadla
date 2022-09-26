<?php

    session_start();

    include_once("../database/database_connection.php");

    $head = $_POST["head"];
    $description = $_POST["description"];
    $news_text = $_POST["news_text"];

    $date_time = date("Y-m-d h:i:sa");

    $image_name = rand().".".explode(".", $_FILES["news_image"]["name"])[1];

    $return_value =move_uploaded_file($_FILES["news_image"]["tmp_name"] , "C:\\xampp\htdocs\project\images\\".$image_name);

    $sql = "insert into news (head  , description  , news_text , news_image , date_time) values ('$head' , '$description' , '$news_text' , '$image_name' , '$date_time')";

    $return_value = $con->query($sql);

    $_SESSION["message_successeded"] = "data stored successfully";

    $title="تسجيل الاخبار";

    $place="parts_of_index_page/news.php";

    header("location:../index.php?title=$title&place=$place");
    

?>