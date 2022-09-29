<div id="caption" style="margin:<?php if(!empty($_SESSION["data_stored"])) echo "50px"; else echo "100px"; ?> auto 0px auto;font-family : nav-font;">

    <?php

    if(!empty($_SESSION["data_stored"])){

    ?>

    <div class="alert alert-success" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["data_stored"]; ?></div>

    <?php

        unset($_SESSION["data_stored"]);

    }


    ?>

   التسجيل في الوظيفة  

</div>
<div id="form_container" style="margin : 50px auto 100px auto;">
  <form action="../project/handles/jop_reg_handle.php" method="post" dir="rtl" style="text-align : right;">
    <div class="form-group">
      <label for="exampleFormControlInput1">الاسم</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="الاسم" required>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">الوظيفة</label>
    <select class="form-control" id="exampleFormControlSelect1" name="jop_title" required>
      <option value="" selected disabled>__اختر اسم الوظيفة__</option>
      <option value="صيدلى ثان ابحث عن عمل">صيدلى ثان ابحث عن عمل</option>
      <option value="صيدلى مدير ابحث عن عمل">صيدلى مدير ابحث عن عمل</option>
      <option value="عامل بصيدلية ابحث عن عمل">عامل بصيدلية ابحث عن عمل</option>
      <option value="وظيفة في صيدلية">وظيفة في صيدلية</option>
    </select>
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
      <label for="exampleFormControlTextarea1">الخبرات والملاحظات</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="exp_not" placeholder="الخبرات والملاحظات" required></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">التليفون الارضى</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tel_ear" placeholder="التليفون الارضى">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">التليفون المحمول</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tel_mob" placeholder="التليفون المحمول" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">البريد الالكترونى</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="email" placeholder="البريد الالكترونى" required>
    </div>
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" class="btn btn-lg btn-danger" value="تسجيل"> 
    </div>  
  </form>
</div>

<script>
  alert("نحيط علم سيادتكم انه سوف يتم ازالة الاعلانات التى مضى عليها 25 يوم تلقائيا");
</script>