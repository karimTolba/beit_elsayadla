<?php 

    include_once("../project/database/database_connection.php");

    $id = $_GET["id"];

    $sql = "select * from jop_reg where id = '$id'";

    $return_value = $con->query($sql);

    $results = $return_value->fetch_all(MYSQLI_ASSOC);

?>

<style>
    h2,h3{

        padding : 10px 15px;
        text-align : right;

    }
    #art{

        margin : 50px auto;
        width : 70%;
        background-color : black;
        color : green;
        border-radius : 20px; 

    }
    #first{
        padding-top : 30px;
    }
    #last{
        padding-bottom : 30px; 
    }
    img{

        border-radius : 20px 20px 0px 0px; 

    }
    .m{

        margin-left : 10px; 

    }
    hr{

       background-color :  green;
       height : 5px;

    }
    #exp{

        overflow-wrap: break-word;
        padding : 10px 50px 0px 0px;

    }
</style>

<article id="art">
    <section>
        <?php foreach($results as $result){ ?>
            <h3 id="first"> الاسم :  <?php echo $result["name"]; ?><i class="fa fa-user m"></i></h3>
            <hr>
            <h2> المنطقة :  <?php echo $result["location"]; ?><i class="fa-solid fa-location-dot m"></i></h2>
            <hr>
            <h2>
                <div>
                    <label for="">الخبرات والملاحظات <i class="fa fa-info-circle m"></i></label>
                </div>
                <div id="exp">
                    <?php echo $result["exp_not"]; ?>
                </div>
            </h2>
            <hr>
            <h2> الارضى :  <?php echo $result["tel_ear"]; ?><i class="fa fa-fax m"></i></h2>
            <hr>
            <h2> الموبايل :  <?php echo $result["tel_mob"]; ?><i class="fa fa-phone m"></i></h2>
            <hr>
            <h2><?php echo $result["email"]; ?>  : الايميل <i class="fa fa-envelope m"></i></h2>
            <hr>
            <h2 id="last"> التاريخ :  <?php echo $result["date_time"]; ?><i class="fa-solid fa-star m"></i></h2>
        <?php } ?>    
    </section>
</article>