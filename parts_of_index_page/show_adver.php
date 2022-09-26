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

<article style="margin : 100px auto;" class="continer" dir="rtl">
    <section class="row">
        <div class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_adver_items.php";$title="صيدليات%20للبيع"; echo "?title=" .$title."&place=" .$place."&item="."بيع"; ?>>
                <img src="../project/images/sold.jpg" alt="pharmacist">
                <div class="image_des">
                    صيدليات للبيع
                </div>
            </a>
        </div>
        <div class="col-6">
            <a href=<?php $place = "parts_of_index_page/show_adver_items.php";$title="صيدليات%20للايجار"; echo "?title=" .$title."&place=" .$place."&item="."ايجار"; ?>>
                <img src="../project/images/rent.jpeg" alt="rent_pharmacy">
                <div class="image_des">
                   صيدليات للايجار
                </div>
            </a>
        </div>
    </section>
</article>