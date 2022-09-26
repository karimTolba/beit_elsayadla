<style>
  .row{

    justify-content: space-around;

  }
</style>

<div id="caption" style="margin : 100px auto 0px auto;font-family : nav-font;">

    بحث في الوظائف

</div>
<div id="form_container" style="margin : 50px auto <?php if(!empty($_SESSION["results"]) || !empty($_SESSION["no_results"])) echo "50px"; else echo "100px"; ?> auto;">
  <form action="../project/handles/jop_res_handle.php" method="post" dir="rtl" style="text-align : right;">
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
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" id="reg_btn" class="btn btn-lg btn-info" value="بحث"> 
    </div>  
  </form>
</div>

<?php if(!empty($_SESSION["results"]) || !empty($_SESSION["no_results"])){ ?>

<div style="margin : 0px auto 100px auto;" id="cont" class="container" dir="rtl">     

  <div class="row">
    <?php

    if (!empty($_SESSION["results"])) {
        $results = $_SESSION["results"];

        foreach ($results as $result) {
            ?>

        <div class="card col-5" style="width: 18rem;margin-top : 20px;margin-bottom : 20px;background-color : black;color :green;border-radius : 10px;">
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;"><?php echo $result["name"]; ?></h5>
            <p class="card-text" style="text-align: right;"><?php echo $result["exp_not"]; ?></p>
          </div>
        </div> 

    <?php
        }

        unset($_SESSION["results"]);
    }

    ?>

<?php

if(!empty($_SESSION["no_results"])) {

?>
  <div class="col-sm" style="text-align:center;">
    <h1><?php echo $_SESSION["no_results"]; ?></h1>
  </div>

<?php


    unset($_SESSION["no_results"]);
}

?>
  </div>
</div>

<?php }?>

<script>

  const cont = document.getElementById("cont");

  if(document.body.contains(cont)){

    cont.scrollIntoView({behavior: "smooth"});

  }

</script>
