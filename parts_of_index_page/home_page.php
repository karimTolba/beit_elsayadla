<?php

    include_once("../project/database/database_connection.php");

    $sql = "select * from news";

    $result = ($con->query($sql))->fetch_all(MYSQLI_ASSOC);

?>

<div id="slider_container">

<?php foreach($result as $results){ ?>

        <span class="images" hidden> <?php echo "../project/images/".$results["news_image"]; ?></span>

        <span class="caps" hidden><?php echo $results["head"] ?></span>

        <span class="texts" hidden><?php echo $results["description"] ?></span>

    <?php } ?>

<style>
    #image_ex{

        color : green;

    }
</style>    

    <img src=<?php echo "../project/images/".$results["news_image"]; ?> id="slider">  

</div>

<div id="image_explain">

<a href="" id="image_ex">
    <h5 id="cap">
        <?php echo $results["head"] ?>
    </h5>
   
    <p id="text">
        <?php echo $results["description"] ?>
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