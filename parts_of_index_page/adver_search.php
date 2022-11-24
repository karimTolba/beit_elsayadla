<?php

if(isset($_SESSION["results"])) {
    $results = $_SESSION["results"];

    $results_arr = [];

    if (count($results) >12) {
        for ($i = 1 ; $i <= (count($results)-1);$i++) {
            if ($i%12 == 0) {
                array_push($results_arr, array_chunk($results, 12)[0]);
            }
        }

        if (count($results)%12 == 0) {
          $ron_num_1 = count($results) - 12;

          array_push($results_arr, array_chunk($results, $ron_num_1)[1]);
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

  #pag{

    width : 70%;
    margin : 0px auto 100px auto;
    text-align : center;
    overflow-x: scroll;

    }

  @media screen and (max-width : 500px){

    #show_no_results{

      font-size : 20px;

    }

    .page-item{
        font-size : 10px;

    }
    .general{

      margin-bottom : 70px;

    }
    #caption{

      width : 60%;

    }
    #pag{

      width : 70%;
      margin : 0px auto 50px auto;
      text-align : center;
      overflow-x: scroll;

    }
  }
</style>

<div id="caption">

    بحث في الوسيط

</div>
<div id="form_container" style="margin : 50px auto <?php if(isset($_SESSION["results"]) || isset($_SESSION["no_results"])) echo "50px"; else echo "100px"; ?> auto;">
  <form action="handles/adver_search_handle.php" method="post" dir="rtl" style="text-align : right;">
  <div class="form-group" id="gov">
        <label for="govs">المحافظات</label>
        <select class="form-control" id="govs" name="gov" required>
        <option value="" selected disabled>__اختر المحافظة__</option>
        <option value="1">شمال سيناء</option>
        <option value="2">الاسماعيلية</option>
        <option value="3">السويس</option>
        <option value="4">بورسعيد</option>
        <option value="5">القاهرة</option>
        <option value="6">الاسكندرية</option>
        </select>
    </div>
    <div class="form-group">
        <label for="area">المناطق</label>
        <select class="form-control" id="area" name="location" required>
        <option value="" selected disabled>__اختر المناطق__</option>
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

<?php if(isset($_SESSION["results"]) || isset($_SESSION["no_results"])){ ?>
<?php 
if(isset($_SESSION["results"])){
  if(count($results) >12 ){
for ($i_1 = 0;$i_1<=((count($results_arr)) - 1);$i_1++) {
  

    ?>

<div id="cont" class="container general anchors_div">

      <div class="row paginations">
        <?php for ($i_2 = 0;$i_2<=((count($results_arr[$i_1])) -1);$i_2++) {
            ?>
          <div class="card col-lg-5 col-10" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href=<?php $id = $results_arr[$i_1][$i_2]["id"]; $place = "parts_of_index_page/adver_details.php";$title="تفاضيل%20الاعلان"; echo "?title=" .$title."&place=" .$place."&id=".$id; ?>>
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo utf8_decode($results_arr[$i_1][$i_2]["name"]); ?></h5>
                <p class="card-text" style="text-align: right;"> <i class="fas fa-map-marker-alt" style="margin-left : 5px;"></i> <?php echo utf8_decode($results_arr[$i_1][$i_2]["adress"]); ?></p>
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
        <div class="card col-lg-5 col-10" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href=<?php $id = $result["id"]; $place = "parts_of_index_page/adver_details.php";$title="تفاضيل%20الاعلان"; echo "?title=" .$title."&place=" .$place."&id=".$id; ?>>
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo utf8_decode($result["name"]); ?></h5>
                <p class="card-text" style="text-align: right;"> <i class="fas fa-map-marker-alt" style="margin-left : 5px;"></i> <?php echo utf8_decode($result["adress"]); ?></p>
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

  <ul id="pag" class="pagination">
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
  const govs = document.getElementById("govs");
  const area = document.getElementById("area");
  const options = area.getElementsByTagName("option");
  const north_sinea = ["بئر العبد" , "العريش" , "الحسنه" , "الشيخ زويد"];
  const esmaelia = ["الاسماعيلية" , "التل الكبير" , "فايد" , "القنطرة شرق" , "القنطرة غرب" , "ابوصوير" , "القصاصين"];
  const suez = ["السويس" , "الاربعين" , "الجناين" , "فيصل" , "كفر النجار"];
  const portsaid = ["شرق" , "جنوب" , "بورفؤاد" , "الضواحى" , "المناخ" , "الزهور" , "العرب"];
  const cairo = ["السلام اول" , "السلام ثانى" , "المرج" , "المطرية" , "النزهة" , "عين شمس" , "مدينة نصر" , "مدينة نصر شرق" , "مدينة نصر غرب" , "مصر الجديدة" 
                  , "الاسبكيه"  , "الموسكى" , "الوايلى" , "باب الشعرية" , "بولاق" , "عابدين" , "غرب" , "منشاة ناصر" , "وسط" 
                  , "15 مايو" , "البساتين" , "الخليفة" , "السيدة زينب" , "المعادى" , "المعصرة" , "المقطم" , "حلوان" , "دار السلام" , "طرة" , "مصر القديمه" 
                  , "الاميرية" , "الزاية الحمراء" , "الزيتون" , "الساحل" , "الشرابية" , "حدائق القبه" , "روض الفرج" , "شبرا"];
  const alexandria = ["ابو قير" , "الابراهيمية" , "الازاريطة" , "الانفوشى" , "الحضره" , "الدخيله" , "السرايا" , "السيوف" , "الشاطبى" , "العجمى" , "العصافرة" , "العطارين" , "القبارى" , "اللبان" , "المعمورة" , "المكس" , "المنتزة" , "المندرة" , "المنشية" , "الورديان" 
                      , "باكوس"  ,"بحرى" , "بولكلى" 
                      , "ثروت" 
                      , "جليم" 
                      , "الجمرك" , "العامرية" , "كليوباترا" , "ميامى" 
                      , "راس التين" , "رشدى" 
                      , "زيزينيا" 
                      , "سابا باشا" , "سان ستيفانو" 
                      , "سبورتينج" ,"ستانلى" , "سموحة" , "سيدى بشر" , "سيدى جابر" 
                      , "شدس" 
                      , "صفر" 
                      , "فيكترويا" , "فلمنج" 
                      , "كامب شيزار", "كرموز" , "كفر عبده" , "كوم الدكه" , "كونت زيزينيا" 
                      , "لوران" 
                      , "محرم بك" , "محطة الرمل"];

  govs.onchange = ()=>{

    if(govs.selectedIndex == 1){

      
      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (north_sinea.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(north_sinea[x]);
        option.value = north_sinea[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

    }
    
    if(govs.selectedIndex == 2){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (esmaelia.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(esmaelia[x]);
        option.value = esmaelia[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

    }

    if(govs.selectedIndex == 3){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (suez.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(suez[x]);
        option.value = suez[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }
      
    }
    if(govs.selectedIndex == 4){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (portsaid.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(portsaid[x]);
        option.value = portsaid[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

      }        
      
      if(govs.selectedIndex == 5){

        for (var i=options.length; i--;) {
            if(i != 0)
              area.removeChild(options[i]);
        }

        for(let x = 0 ; x <= (cairo.length-1);x++){

          let option = document.createElement("option");
          let text_option = document.createTextNode(cairo[x]);
          option.value = cairo[x];
          option.appendChild(text_option);
          area.appendChild(option);

        }

        }       

        if(govs.selectedIndex == 6){

        for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
        }

        for(let x = 0 ; x <= (alexandria.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(alexandria[x]);
        option.value = alexandria[x];
        option.appendChild(text_option);
        area.appendChild(option);

        }

        }
  }


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
