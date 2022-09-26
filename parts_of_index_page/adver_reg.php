<div id="caption" style="margin:<?php if(!empty($_SESSION["data_stored"])) echo "50px"; else echo "100px"; ?> auto 0px auto;font-family : nav-font;">

    <?php

    if(!empty($_SESSION["data_stored"])){

    ?>

    <div class="alert alert-success" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["data_stored"]; ?></div>

    <?php

        unset($_SESSION["data_stored"]);

    }


    ?>

   تسجيل صيدلية  

</div>
<div id="form_container" style="margin : 50px auto 100px auto;">
  <form action="../project/handles/adver_handle.php" method="post" enctype="multipart/form-data" dir="rtl" style="text-align : right;">
    <div class="form-group">
      <label for="exampleFormControlInput1">اسم الصيدلية</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="اسم الصيدلية" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">المكان</label>
        <select class="form-control" id="exampleFormControlSelect1" name="location" required>
        <option value="" selected disabled>__اختر المكان__</option>
        <option value="بئر العبد">بئر العبد</option>
        <option value="العريش">العريش</option>
        <option value="الحسنه">الحسنه</option>
        <option value="الشيخ زويد">الشيخ زويد</option>
        </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea2">العنوان</label>
      <textarea class="form-control" id="exampleFormControlTextarea2" rows="6" name="adress" placeholder="العنوان" required></textarea>
    </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">التليفون الارضى</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tel_ear" placeholder="التليفون الارضى">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">ايجار/ بيع</label>
        <select class="form-control" id="exampleFormControlSelect1" name="operation_name" required>
            <option value="" selected disabled>__اختر بيع / ايجار__</option>
            <option value="ايجار">ايجار</option>
            <option value="بيع">بيع</option>
        </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">التفاصيل</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="details" placeholder="التفاصييل" required></textarea>
    </div>
    <div class="input-group-prepend">
        <label for="news_image" style="margin-right : 10px;">اختر صورة</label>
        <input type="file" name="pharmacy_image" id="pharmacy_image">
    </div>
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" class="btn btn-lg btn-danger" value="تسجيل"> 
    </div>  
  </form>
</div>