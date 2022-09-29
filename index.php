<?php 

    include_once("../project/database/database_connection.php");

    $dif_value = 0;
    $number_of_days = 0;
    $dif_value_2 = 0;
    $number_of_days_2 = 0;

    $sql = "select id , date_time from jop_reg";

    $return_value = $con->query($sql);

    $results = $return_value->fetch_all(MYSQLI_ASSOC);

    for ($i = 1 ;$i <= count($results) - 1 ;$i++) {

        $dif_value = strtotime($results[$i]["date_time"]) - strtotime($results[0]["date_time"]);

        $number_of_days = round($dif_value / (60 * 60 * 24));

        if ($number_of_days == 25) {
            $first_id = $results[0]["id"];

            $last_id = $results[$i]["id"];

            $sql_2 = "delete from jop_reg where id between '$first_id' and $last_id";

            $con->query($sql_2);
        }
    }

    $sql_3 = "select id , date_time from jop_reg";

    $return_value_2 = $con->query($sql_3);

    $results_2 = $return_value_2->fetch_all(MYSQLI_ASSOC);

    for ($i_2 = 1 ; $i_2 <= count($results_2) - 1 ;$i_2++) {

        $dif_value_2 = strtotime($results_2[$i_2]["date_time"]) - strtotime($results_2[0]["date_time"]);

        $number_of_days_2 = round($dif_value_2 / (60 * 60 * 24));

        if ($number_of_days_2 == 25) {
            $first_id_2 = $results_2[0]["id"];

            $last_id_2 = $results_2[$i_2]["id"];

            $sql_4 = "delete from jop_reg where id between '$first_id_2' and $last_id_2";

            $con->query($sql_4);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../project/images/project_icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../project/css/navbar.css">
    <link rel="stylesheet" href="../project/css/sign_up.css">
    <link rel="stylesheet" href="../project/css/home_page.css">
    <link rel="stylesheet" href="../project/css/news.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <style>
        a, a:hover {
            color : green;
        }
        #b{

            background-image: url('images/back.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100% 100%;
            opacity : .8;

        }
    </style>
    <title><?php echo "بيت الصيادلة"." - "; ?> 
    
        <?php 

            if(isset($_GET["title"]))    
        
                echo  $_GET["title"];
            else
            
                echo "الرئيسية";
        
        
        ?>

    </title>
</head>
<body id="b">
    <?php

        include_once("parts_of_index_page/navbar.php");

    ?>

 <?php

    if(isset($_GET["place"]))

        $destination = $_GET["place"];

    else
    
        $destination = "parts_of_index_page/home_page.php";
 
    include_once($destination);
 
 
 ?>   

    <?php


        include_once("parts_of_index_page/footer.php");


    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>

</body>
</html>