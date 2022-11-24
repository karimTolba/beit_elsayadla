<?php 

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $id = $_GET["id"];

    $sql = "select * from news where id = '$id'";

    $results = [];

    $return_value = $con->query($sql);

    while($data = $return_value->fetch_assoc()){

        array_push($results , $data);

    }
    


?>

<style>
    h4{

        padding : 10px 15px;
        text-align : right;
        overflow-wrap : break-word;

    }
    #art{

        margin : 50px auto;
        width : 90%;
        background-color : black;
        color : green;
        border-radius : 20px; 
        margin : 150px auto;

    }
    #first{
        padding: 30px 10px 20px 10px;
        text-align : right;
    }
    #last{
        padding: 10px;
        text-align : right;  
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
        padding : 10px 0px 30px 0px;
        line-height : 50px;

    }
    @media screen and  (max-width : 500px){

        #exp , #first {


            font-size : 15px;

        }

        img{

            height : 500px;

        }

    }
</style>

<article id="art">
    <section>
        <?php foreach($results as $result){ ?>
            <img style="width : 100%;" src=<?php echo "images/".$result["news_image"]; ?> alt="pharmacy_image">
            <h4 id="first">عنوان الخبر : <?php echo utf8_decode($result["head"]); ?></h4>
            <hr>
            <p id="last">  تاريخ النشر:  <?php echo $result["date_time"]; ?><i class="fa-solid fa-star m"></i></p>
            <h4>
                <div>
                    <label for="">تفاصيل الخبر</label>
                </div>
                <div id="exp">
                    <?php echo utf8_decode($result["news_text"]); ?>
                </div>
            </h4>
        <?php } ?>    
    </section>
</article>