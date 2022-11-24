<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2DGPWRS3D4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2DGPWRS3D4');
    </script>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/project_icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sign_up.css">
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="css/news.css">
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
        #caption{

            font-size : 30px;

        }
        @media screen and (max-width : 500px){
            
            ul li a.nav-link , .dropdown-menu .dropdown-item{

                text-align : right;
    
            }

            ul{

                padding-right : 13px;

            }
            #image_explain , #slider_container , #form_container{

                width : 90%;

            }
            .text-center{

                font-size : 12px;

            }
            #caption{

                font-size : 20px;

            }

        
        }
    </style>
    <title><?php echo "بيت الصيادلة"." - "."تسجيل الدخول"; ?></title>
</head>
<body id="b">

    <?php

        include_once("parts_of_index_page/navbar.php");

    ?>


 <?php

    include_once("parts_of_index_page/login_page.php")

 
 ?>


<?php


include_once("parts_of_index_page/footer.php");


?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>    
    
</body>
</html>