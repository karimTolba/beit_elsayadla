<div id="caption" style="margin:5rem auto 0px auto;">

    <?php

    if(!empty($_SESSION["message_successeded"])){

    ?>

    <div class="alert alert-success" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["message_successeded"]; ?></div>

    <?php

        unset($_SESSION["message_successeded"]);

    }


    ?>

    تسجيل الاخبار

</div>

<div id="form_container" style="margin-top : 30px;">
  <form action="../handles/news_handle.php" method="post" enctype="multipart/form-data" dir="rtl" style="text-align: right;">
    <div class="form-group">
      <label for="exampleFormControlInput1">مقدمة الخبر</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="head" placeholder="مقدمة الخبر">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">وصف الخبر</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="وصف الخبر"></textarea>
    </div>  
    <div class="form-group">
      <label for="exampleFormControlTextarea1">من الخبر</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="news_text" placeholder="متن الخبر"></textarea>
    </div>
    <div class="input-group">
  <div class="input-group-prepend">
    <label for="news_image" style="margin-right : 10px;">اختر صورة</label>
    <input type="file" name="news_image" id="news_image">
  </div>
</div>
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" class="btn btn-lg btn-danger" value="سجل"> 
    </div>  
  </form>
</div>