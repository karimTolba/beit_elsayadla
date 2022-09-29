<?php

if(isset($_SESSION["results"])) {
    $results = $_SESSION["results"];

    $results_arr = [];

    if (count($results) > 12) {
        for ($i = 1 ; $i <= (count($results)-1);$i++) {
            if ($i%12 == 0) {
                array_push($results_arr, array_chunk($results, 12)[0]);
            }
        }

        if (count($results)%12 > 0) {
            $ron_num = count($results) - (count($results)%12);

            array_push($results_arr, array_chunk($results, $ron_num)[1]);
        }

    } else {
        $results_arr = $results;
    }
}
?>

<style>
  .row{

    justify-content: space-around;

  }
  a:hover{

    text-decoration: none;

  }
  .pagination{
    margin-bottom : 100px;
  }
  .page-link{

  background-color: black;
  color : green;

  }
  a:hover{

    text-decoration: none;

  }
  .general{

    margin-bottom : 100px;
    direction: rtl;

  }
  .paginations{

    justify-content: space-around;

  }
  .no_results{

    margin-top : 150px;
    margin-bottom : 150px;
    color : green;
    background-color: black;
    padding : 10px 20px;
    width : 70%;
    border-radius : 10px;

  }
  .r_no_results{

    justify-content: center;

  }
  #show_no_results{

    text-align : center;
    font-size: 40px;
    font-weight : bold;

  }
  #caption{

    text-align : center;
    font-size: 30px;
    font-weight : bold;
    margin-top :100px;
    color : green;
    background-color: black;
    padding : 10px 20px;
    border-radius : 10px;
    width : 40%;
    margin : 100px auto 50px auto;
    font-family: nav-font;

  }
</style>


<div id="caption">

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

<?php if(isset($_SESSION["results"]) || isset($_SESSION["no_results"])){ ?>
<?php 
if(isset($_SESSION["results"])){
  if(count($results) >12 ){
for ($i_1 = 0;$i_1<=((count($results_arr)) - 1);$i_1++) {
    echo "<script console.log('>".$i_1."')"."</script>";

    ?>

<div id="cont" class="container general anchors_div">

      <div class="row paginations">
        <?php for ($i_2 = 0;$i_2<=((count($results_arr[$i_1])) -1);$i_2++) {
            ?>
          <div class="card col-5" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href=<?php $id = $results_arr[$i_1][$i_2]["id"]; $place = "parts_of_index_page/jop_details.php";$title="تفاصيل%20الوظيفة"; echo "?title=" .$title."&place=" .$place."&id=".$id; ?>>
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo $results_arr[$i_1][$i_2]["name"]; ?></h5>
                <p class="card-text" style="text-align: right;"><?php echo $results_arr[$i_1][$i_2]["exp_not"]; ?></p>
              </div>
            </a>  
          </div> 
          <?php } ?>
      </div>

</div>
<?php }?>
<?php }else{ ?>

  <div id="cont" class="container general">
    <div class="row paginations">
      <?php foreach($results_arr as $result){ ?>
        <div class="card col-5" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href=<?php $id = $result["id"]; $place = "parts_of_index_page/jop_details.php";$title="تفاصيل%20الوظيفة"; echo "?title=" .$title."&place=" .$place."&id=".$id; ?>>
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo $result["name"]; ?></h5>
                <p class="card-text" style="text-align: right;"><?php echo $result["exp_not"]; ?></p>
              </div>
            </a>  
          </div> 
      <?php }?>  
    </div>
  </div>

<?php }?>
 <?php
}else{
    ?>
<div id="cont" class="container no_results">
  <div class="row r_no_results">
    <div class="col-12" id="show_no_results"><?php echo $_SESSION["no_results"]?></div>
  </div>
</div>

<?php 
} 
?>

<?php }?>


<?php if(isset($_SESSION["results"])){
  echo "<script>"."console.log('here')"."</script>";
  if(count($results) >12 ){ ?>

  <ul id="pag" class="pagination justify-content-center">
    <li class="page-item" id="prev"><a class="page-link" href="#">Previous</a></li>
    <?php for($m = 0 ; $m<=(count($results_arr) - 1);$m++){ ?>
      <li class="page-item"><a class="page-link anchors" href="#"><?php echo ($m + 1); ?></a></li>
    <?php }?>
    <li class="page-item" id="next"><a class="page-link" href="#">Next</a></li>
  </ul>

<?php
  }
}
?>

<?php if(isset($_SESSION["results"])) unset($_SESSION["results"]) ?>
<?php if(isset($_SESSION["no_results"])) unset($_SESSION["no_results"]) ?>
<script>

  const cont = document.getElementById("cont");
  const pag = document.getElementById("pag");

  if(document.body.contains(cont)){

    cont.scrollIntoView({behavior: "smooth"});

    console.log("here");

  }
  
  if(pag != null){

    const anchors = document.querySelectorAll(".anchors");
    const anchors_div = document.getElementsByClassName("anchors_div");
    const next = document.getElementById("next");
    const prev = document.getElementById("prev");
    var i_out = 0;
    
    for(let i = 0 ; i <= anchors_div.length -1 ;i++){

      anchors_div[i].setAttribute("hidden" , "");
      anchors[i].setAttribute("style" , "background-color : black;color : green;")

    }

    anchors_div[0].removeAttribute("hidden");
    anchors[0].setAttribute("style" , "background-color : white;color : blue;")
      
    next.onclick = ()=>{

      i_out++;

      if(i_out > anchors.length -1)
        i_out = 0;

      for(let i = 0 ; i <= anchors_div.length -1 ;i++){

        anchors_div[i].setAttribute("hidden" , "");
        anchors[i].setAttribute("style" , "background-color : black;color : green;")

      }

      anchors_div[i_out].removeAttribute("hidden");
      anchors[i_out].setAttribute("style" , "background-color : white;color : blue;")


    }

    prev.onclick = ()=>{

      i_out--;

      if(i_out < 0)
        i_out = anchors.length - 1;

      for(let i = 0 ; i <= anchors_div.length -1 ;i++){

        anchors_div[i].setAttribute("hidden" , "");
        anchors[i].setAttribute("style" , "background-color : black;color : green;")

      }

      anchors_div[i_out].removeAttribute("hidden");
      anchors[i_out].setAttribute("style" , "background-color : white;color : blue;")



    }

    anchors.forEach((anchor , index) => {
      anchor.addEventListener('click', function handleClick(event) {

        i_out = index;

        for(let i = 0 ; i <= anchors_div.length -1 ;i++){

          anchors_div[i].setAttribute("hidden" , "");
          anchors[i].setAttribute("style" , "background-color : black;color : green;")

        }

        anchors_div[index].removeAttribute("hidden");
        anchor.setAttribute("style" , "background-color : white;color : blue;")
      });
    });

}

</script>