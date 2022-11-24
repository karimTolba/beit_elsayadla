<?php

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $sql = "select * from news";

    $result = [];

    $return_value = $con->query($sql);

    while($data = $return_value->fetch_assoc()){

        array_push($result , $data);

    }
    
?>

<div id="slider_container">

<?php foreach($result as $results){ ?>

        <span class="images" hidden><?php echo "images/".$results["news_image"]; ?></span>

        <span class="caps" hidden><?php echo utf8_decode($results["head"]); ?></span>

        <span class="texts" hidden><?php echo utf8_decode($results["description"]); ?></span>

    <?php } ?>

<style>
    #image_ex{

        color : green;

    }
</style>    

    <img src=<?php echo "images/".$results["news_image"]; ?> id="slider">  

</div>

<div id="image_explain">

<a href=<?php $id=$results["id"]; $place = "parts_of_index_page/show_news.php";$title="تفاصيل%20الخبر"; echo "?title=" .$title."&place=" .$place."&id=".$id; ?> id="image_ex">
    <h5 id="cap">
        <?php echo utf8_decode($results["head"]); ?>
    </h5>
   
    <p id="text">
        <?php echo utf8_decode($results["description"]); ?>
    </p>
</a>
</div>


<script>


    var caption = document.getElementById("cap");

    var text = document.getElementById("text");

    var slider = document.getElementById("slider");

    var caps = document.getElementsByClassName("caps");

    var texts = document.getElementsByClassName("texts");

    var images = document.getElementsByClassName("images");

    var initial = 0;

    function slider_work(){

        setTimeout(() => {

            if(initial > (images.length - 1)){

                initial = 0;

                slider.src = "";

                text.textContent = "";

                caption.textContent = "";

                slider.src = images[initial].textContent;

                text.textContent = texts[initial].textContent;

                caption.textContent = caps[initial].textContent;

            }

            else{

                slider.src = "";

                text.textContent = "";

                caption.textContent = "";

                slider.src = images[initial].textContent;

                text.textContent = texts[initial].textContent;

                caption.textContent = caps[initial].textContent;

            }

            initial++;    


            slider_work();


        }, 5000);

    }

    slider_work();



</script>