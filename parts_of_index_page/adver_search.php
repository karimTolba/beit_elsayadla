<style>
  .row{

    justify-content: space-around;

  }
  a:hover{

    text-decoration: none;

  }
</style>

<div id="caption" style="margin : 100px auto 0px auto;font-family : nav-font;">

    بحث في الوسيط

</div>
<div id="form_container" style="margin : 50px auto <?php if(!empty($_SESSION["results"]) || !empty($_SESSION["no_results"])) echo "50px"; else echo "100px"; ?> auto;">
  <form action="../project/handles/adver_search_handle.php" method="post" dir="rtl" style="text-align : right;">
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
        <label for="exampleFormControlSelect1">ايجار/ بيع</label>
        <select class="form-control" id="exampleFormControlSelect1" name="operation_name" required>
            <option value="ايجار">ايجار</option>
            <option value="بيع">بيع</option>
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
        <a href="">
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;"><?php echo $result["name"]; ?></h5>
            <p class="card-text" style="text-align: right;"><i class="fas fa-map-marker-alt" style="margin-left : 5px;"></i> <?php echo $result["adress"]; ?></p>
          </div>
        </a>  
        </div> 

    <?php
        }

        unset($_SESSION["results"]);
    }

    ?>

<?php

if(!empty($_SESSION["no_results"])) {

?>
  <div style="text-align:center;color :white;background-color : black;border-radius : 10px;padding : 10px;width : 60%;">
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
