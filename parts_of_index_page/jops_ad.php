<style>
    img{
        width : 70%;
        height : 70%;
    }
    .col-6{

        text-align: center;

    }
    .image_des{

        height : 20%;
        width : 70%;
        background-color: black;
        margin : 0px auto;
        border-radius : 0px 0px 20px 20px;
        text-align: center;
        color : green;
        padding-top : 10px;
        font-size: 1.5rem; 

    }
    a:hover{

        text-decoration: none;

    }
</style>

<?php $jop_title = [

    "first" => "صيدلى%20ثان%20ابحث%20عن%20عمل" ,
    "second" => "صيدلى%20مدير%20ابحث%20عن%20عمل" ,
    "third" => "عامل%20في%20صيدلية%20ابحث%20عن%20عمل" ,
    "forth" => "وظيفة%20في%20صيدلية"

]; ?>

<article style="margin : 100px auto;" class="continer" dir="rtl">
    <section class="row">
        <div class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_jops_ad.php";$title="عرض%20اعلان%20الوظائف"; echo "?title=" .$title."&place=" .$place."&jop_title=".$jop_title["first"]; ?>>
                <img src="../project/images/pharmacist.jpg" alt="pharmacist">
                <div class="image_des">
                    صيدلى ثان ابحث عن عمل
                </div>
            </a>
        </div>
        <div class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_jops_ad.php";$title="عرض%20اعلان%20الوظائف"; echo "?title=" .$title."&place=" .$place."&jop_title=".$jop_title["second"]; ?>>
                <img src="../project/images/pharmacist_manager.jpg" alt="pharmacist_manager">
                <div class="image_des">
                    صيدلى مدير ابحث عن عمل
                </div>
            </a>
        </div>
        <div class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_jops_ad.php";$title="عرض%20اعلان%20الوظائف"; echo "?title=" .$title."&place=" .$place."&jop_title=".$jop_title["third"]; ?>>
                <img src="../project/images/worker.jpg" alt="worker">
                <div class="image_des">
                    عامل في صيدلية ابحث عن عمل
                </div>
            </a>
        </div>
        <div  class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_jops_ad.php";$title="عرض%20اعلان%20الوظائف"; echo "?title=" .$title."&place=" .$place."&jop_title=".$jop_title["forth"]; ?>>
                <img src="../project/images/any_jop.jpg" alt="">
                <div class="image_des">
                    وظيفة في صيدلية 
                </div>
            </a>
        </div>
    </section>
</article>