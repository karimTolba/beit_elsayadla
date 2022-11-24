<style>
    .card{

        margin : 100px auto;
        width : 70%;
        background-color: black;
        color : green;
        border : 0px;
        border-radius : 20px;
        
    }

    .card img{

        height : 300px;

    }
    .card-title , .card-text , .card-body{

        text-align: right;

    }

    
    @media screen and (max-width : 500px){

        .card{

            width : 90%;

        }

    }    
    
</style>

<?php

include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

$sql = "select * from news";

$result = $con->query($sql);

$arr = [];

while($row = mysqli_fetch_array($result)){

    array_push($arr , $row);

}

?>

<?php foreach($arr as $arrs){ ?>

    <div class="card">
        <img class="card-img-top" src=<?php echo "../images/".$arrs[4]; ?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo utf8_decode($arrs[1]); ?></h5>
            <p class="card-text"><?php echo utf8_decode($arrs[2]); ?></p>
            <a href=<?php $news_id = $arrs[0]; $place = "parts_of_index_page/news_modify.php";$title="لوحة%20التحكم%20تعديل%20الاخبار"; echo "?title=" .$title."&place=" .$place."&id=".$news_id; ?> class="btn btn-info">تعديل</a>
            <a href=<?php $id=$arrs[0]; echo "handles/news_delete.php?id=".$id; ?> class="btn btn-danger">حذف</a>
        </div>
    </div>

<?php } ?>    