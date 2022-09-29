<?php 

    include_once("../project/database/database_connection.php");

    $id = $_GET["id"];

    $sql = "select * from pharmacy_reg where id = '$id'";

    $return_value = $con->query($sql);

    $results = $return_value->fetch_all(MYSQLI_ASSOC);


?>

<style>
    h2,h3{

        padding : 10px 15px;
        text-align : right;
        overflow-wrap : break-word;

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
    .exp{

        overflow-wrap: break-word;
        padding : 10px 50px 0px 0px;

    }
</style>

<article id="art">
    <section>
        <?php foreach($results as $result){ ?>
            <img style="width : 100%;" src=<?php echo "../project/images/".$result["pharmacy_image"]; ?> alt="pharmacy_image">
            <h2 id="first"> اسم الصيدلية : <?php echo $result["name"]; ?><i class="fa-solid fa-staff-snake m"></i></h2>
            <hr>
            <h3> المنطقة :  <?php echo $result["location"]; ?><i class="fa-solid fa-location-dot m"></i></h3>
            <hr>
            <h2>
                <div>
                    <label for="">العنوان <i class="fa-solid fa-location-arrow m"></i></label>
                </div>
                <div class="exp">
                    <?php echo $result["adress"]; ?>
                </div>
            </h2>
            <hr>
            <h3>التليفون الارضى : <?php echo $result["tel_ear"]; ?><i class="fas fa-fax m"></i></i></h3>
            <hr>
            <h2>
                <div>
                    <label for="">التفاصيل <i class="fa fa-info-circle m"></i></label>
                </div>
                <div class="exp">
                    <?php echo $result["details"]; ?>
                </div>
            </h2>
            <hr>
            <h3> العملية :  <?php echo $result["operation_name"]; ?><i class="fa-solid fa-star m"></i></h3>
            <hr>
            <h3 id="last"> تاريخ الاعلان :  <?php echo $result["date_time"]; ?><i class="fa-solid fa-star m"></i></h2>
        <?php } ?>    
    </section>
</article>