<?php

    session_start();

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $head = utf8_encode($_POST["head"]);
    $description = utf8_encode($_POST["description"]);
    $news_text = utf8_encode($_POST["news_text"]);
    $news_image = $_FILES["news_image"];
    $news_image_old = $_POST["news_image_old"];
    $id = $_POST["news_id"];
    $modify_date = date("Y-m-d h:i:sa");

    //echo $head."<br>".$description."<br>".$news_text."<br>".$id."<br>".$modify_date."<br>";

    if($news_image["size"] != 0){

        $image_name = rand().".".explode(".", $_FILES["news_image"]["name"])[1];

        move_uploaded_file($_FILES["news_image"]["tmp_name"] , "/home/vpn2w4bl7xr8/public_html/images/".$image_name);
        
        unlink("/home/vpn2w4bl7xr8/public_html/images/".$news_image_old);

        $sql = "update 
                news 
                set
                head = '$head' ,
                description = '$description' ,
                news_text = '$news_text' ,
                news_image = '$image_name' , 
                modify_date = '$modify_date'
                where
                id = '$id'
                ";
        $con->query($sql);
            
        $_SESSION["message_successeded"] = "تم تعديل البيانات بنجاح";

        $title="تعديل%20البيانات%20لوحة%20التحكم";

        $place="parts_of_index_page/news_modify.php";

        header("location:../index.php?title=$title&place=$place&id=".$id);
        

    }

    else{
    
        $sql = "update 
                news 
                set
                head = '$head' ,
                description = '$description' ,
                news_text = '$news_text' ,
                modify_date = '$modify_date'
                where
                id = '$id'
                ";
        $con->query($sql);
            
        $_SESSION["message_successeded"] = "تم تعديل البيانات بنجاح";

        $title="تعديل%20البيانات%20لوحة%20التحكم";

        $place="parts_of_index_page/news_modify.php";

        header("location:../index.php?title=$title&place=$place&id=".$id);

    }   

?>