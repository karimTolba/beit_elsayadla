<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="../project/images/project_icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../project/css/navbar.css">
    <link rel="stylesheet" href="../project/css/sign_up.css">
    <link rel="stylesheet" href="../project/css/home_page.css">
    <link rel="stylesheet" href="../project/css/news.css">
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

</body>
</html>