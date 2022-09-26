<?php 

  session_start();

  include_once("../project/database/database_connection.php");

  $switch = false;

  $switch_2 = false;

  if(isset($_SESSION["user_name"])){

    $sql = "select * from users";

    $result = ($con->query($sql))->fetch_all(MYSQLI_ASSOC);
    
    foreach($result as $results){

      if($results["user_name"] == $_SESSION["user_name"])
        $switch_2 = true;

    }
    

  }

  if(isset($_SESSION["user_id"])){

    $user_id = $_SESSION["user_id"];

    $sql = "select 
            permetion_name , user_name
            from 
            permetion
            inner join
            users
            on
            users.permetion_id = permetion.id
            where 
            users.id = $user_id
          ";
    $result = ($con->query($sql))->fetch_assoc();      

    $permetion_name = $result["permetion_name"];

    $user_name = $result["user_name"];

  }

  else{ 

    $switch = true;

  }   


?>

<nav id="navbar" class="navbar navbar-expand-lg" style="background-color: black;color : lightgreen;" dir="rtl">
  <a class="navbar-brand" id="t" href=<?php $place = "parts_of_index_page/home_page.php";$title="الرئيسية"; echo "?title=" .$title."&place=" .$place; ?>><i class="fas fa-mortar-pestle" style="margin-left : 10px;"></i> بيت الصيادلة</a>
  <button style="border : 1px  solid  green;" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span  class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?php $place = "parts_of_index_page/home_page.php";$title="الرئيسية"; echo "?title=" .$title."&place=" .$place; ?>><i class="fa fa-home" style="margin-left : 5px;" aria-hidden="true"></i> الرئيسية <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-tasks" aria-hidden="true" style="margin-left : 5px;"></i> وظائف 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/jops_search.php";$title="بحث%20في%20الوظائف"; echo "?title=" .$title."&place=" .$place; ?>>بحث في الوظائف</a>
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/jops_ad.php";$title="اعلانات%20وظائف"; echo "?title=" .$title."&place=" .$place; ?>>اعلانات وظائف</a>
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/jops_reg.php";$title="تسجيل%20وظائف"; echo "?title=" .$title."&place=" .$place; ?>>تسجيل وظائف</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class=" fa-solid fa-handshake" style="margin-left : 5px;"></i> وسيط الصيادلة 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/adver_search.php";$title="بحث%20في%20الوسيط"; echo "?title=" .$title."&place=" .$place; ?>>بحث في الوسيط</a>
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/show_adver.php";$title="اعلانات%20الصيدليات"; echo "?title=" .$title."&place=" .$place; ?>>اعلانات الصيدليات</a>
          <a class="dropdown-item" href=<?php $place = "parts_of_index_page/adver_reg.php";$title="تسجيل%20صيدلية"; echo "?title=" .$title."&place=" .$place; ?>>التسجيل</a>
        </div>
      </li>
      <?php if($switch == true && $switch_2 == false){?>
        <li class="nav-item">
          <a class="nav-link" href=<?php $place = "parts_of_index_page/sign_up.php";$title="تسجيل%20في%20الموقع"; echo "?title=" .$title."&place=" .$place; ?>><i class="fa-solid fa-user-plus" style="margin-left : 5px;"></i> تسجيل في الموقع</a>
        </li>
      <?php } ?>
      <?php if($switch){?>    
        <li class="nav-item">
          <a class="nav-link" href=<?php $place = "parts_of_index_page/login_page.php";$title="تسجيل%20دخول"; echo "?title=" .$title."&place=" .$place; ?>><i class="fa-solid fa-right-to-bracket" style="margin-left : 5px ;"></i> تسجيل دخول</a>
        </li>
      <?php }?>
        <?php
          if($switch == false){ 
          if($permetion_name == "admin"){?>
          <li class="nav-item">
            <a class="nav-link" href=<?php $place = "parts_of_index_page/news.php";$title="تسجيل%20الاخبار"; echo "?title=" .$title."&place=" .$place; ?>><i class="fa-solid fa-file-lines" style="margin-left : 5px;"></i> تسجيل الاخبار</a>
          </li>
        <?php }} ?>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-phone" style="margin-left : 5px;"></i> اتصل بنا</a>
      </li>
      <?php if($switch == false){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo $user_name ?> <i class="fa-solid fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=<?php echo "../project/handles/log_out_handle.php" ?>>تسجيل خروج</a>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>


<script>
  /*const navbar = document.getElementById("navbar");

  document.onscroll = ()=>{
    if (window.scrollY > 0) {
        navbar.classList.add("fixed-top");
    }
    else
      navbar.classList.remove("fixed-top");
  }*/
</script>
