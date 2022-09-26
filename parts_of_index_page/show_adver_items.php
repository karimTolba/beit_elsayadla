<?php

include_once("../project/database/database_connection.php");

$item = $_GET["item"];

$results_arr = [];  

$sql = "select * from pharmacy_reg where operation_name = '$item' order by id desc";

$return_value = $con->query($sql);

$results = $return_value->fetch_all(MYSQLI_ASSOC);

if (count($results) >=12) {
  for($i = 1 ; $i <= (count($results)-1);$i++){
  if($i%12 == 0){
    array_push($results_arr, array_chunk($results, 12)[0]);
}
  }

  if(count($results)%12 > 0){

    $ron_num = count($results) - (count($results)%12);

    array_push($results_arr, array_chunk($results, $ron_num)[1]);

  }
  
}
else{
    $results_arr = $results;
}
?>

<style>
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

    margin-bottom : 150px;
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

  }
</style>

<?php if($return_value->num_rows > 0) { ?>

  <div class="container">
    <div class="row r_no_results">
      <div id="caption"><?php echo "صيدليات"." "."لل".$item; ?></div>
    </div>
  </div>

<?php } ?>

<?php 

if($return_value->num_rows > 0) {
  if(count($results) >=12 ){
for ($i_1 = 0;$i_1<=((count($results_arr)) - 1);$i_1++) {
    echo $i_1;

    ?>

<div class="container general anchors_div">

      <div class="row paginations">
        <?php for ($i_2 = 0;$i_2<=((count($results_arr[$i_1])) -1);$i_2++) {
            ?>
          <div class="card col-5" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href="">
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo $results_arr[$i_1][$i_2]["name"]; ?></h5>
                <p class="card-text" style="text-align: right;"> <i class="fas fa-map-marker-alt" style="margin-left : 5px;"></i> <?php echo $results_arr[$i_1][$i_2]["location"]; ?></p>
              </div>
            </a>  
          </div> 
          <?php } ?>
      </div>

</div>
<?php }?>
<?php }else{ ?>

  <div class="container general">
    <div class="row paginations">
      <?php foreach($results_arr as $result){ ?>
        <div class="card col-5" style="width: 18rem;background-color : black;color : green;border-radius : 10px;margin-top : 20px;margin-bottom : 20px;">
            <a href="">
              <div class="card-body">
                <h5 class="card-title" style="text-align: right;"><?php echo $result["name"]; ?></h5>
                <p class="card-text" style="text-align: right;"> <i class="fas fa-map-marker-alt" style="margin-left : 5px;"></i> <?php echo $result["location"]; ?></p>
              </div>
            </a>  
          </div> 
      <?php }?>  
    </div>
  </div>

<?php }?>
 <?php
}
else{
    ?>
<div class="container no_results">
  <div class="row r_no_results">
    <div class="col-12" id="show_no_results"><?php echo "صيدليات"." "."لل".$item." "."ليس لها نتائج"; ?></div>
  </div>
</div>

<?php } ?>


<?php if($return_value->num_rows > 0) {
  if(count($results) >=12 ){ ?>

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

<script>

  const pag = document.getElementById("pag");

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