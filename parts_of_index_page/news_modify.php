<style>

    .img_con img{

        width : 100%;
        height : 400px;    
        
    }
    .input_con{

        margin-top : 20px;

    }
</style>

<?php
    
    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $id = $_GET["id"];

    $sql = "select * from news where id = '$id'";

    $result = $con->query($sql);

    $results = $result->fetch_array(MYSQLI_ASSOC);

?>

<div id="caption" style="margin:5rem auto 0px auto;">

    <?php

    if(!empty($_SESSION["message_successeded"])){

    ?>

    <div class="alert alert-success" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["message_successeded"]; ?></div>

    <?php

        unset($_SESSION["message_successeded"]);

    }


    ?>

    تعديل الاخبار

</div>

<div id="form_container" style="margin-top : 30px;">
  <form action="../handles/news_modify_handle.php" method="post" enctype="multipart/form-data" dir="rtl" style="text-align: right;">
    <input type="text" value="<?php echo $results["id"]; ?>" name="news_id" hidden>
    <input type="text" value="<?php echo $results["news_image"]; ?>" name="news_image_old" hidden>
    <div class="form-group">
      <label for="exampleFormControlInput1">مقدمة الخبر</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results["head"]); ?>" name="head">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">وصف الخبر</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo utf8_decode($results["description"]); ?></textarea>
    </div>  
    <div class="form-group">
      <label for="exampleFormControlTextarea1">متن الخبر</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="news_text"><?php echo utf8_decode($results["news_text"]); ?></textarea>
    </div>
    <div class="img_con">
        <img src=<?php echo "../images/".$results["news_image"]; ?> alt="">
    </div>
    <div class="input_con">
        <label for="news_image" style="margin-right : 10px;">اختر صورة اخرى</label>
        <input type="file" name="news_image" id="news_image">
    </div>
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" class="btn btn-lg btn-danger" value="عدل"> 
    </div>  
  </form>
</div>