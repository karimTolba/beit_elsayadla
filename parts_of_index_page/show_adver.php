<style>
     img{
        width : 70%;
        height : 70%;
    }
    .col-lg-6{

        text-align: center;
        margin-bottom : 180px;

    }
    .image_des{

        height : 55%;
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
    .form-group{

        padding : 0px 20px;

    }
    .dropdown-divider{

        margin-top : 20px;

    }
    @media screen and (max-width : 500px){

        .second{

            margin-top : 50px;

        }

        .image_des{

            padding-top : 0px;
            height : 70%;

        }
        .image_des , img{

            width : 80%;

        }

    }
</style>

<?php 

$place = "parts_of_index_page/show_adver_items.php";
$title_sold="صيدليات%20للبيع";
$title_rent = "صيدليات%20للايجار";

$items = [

    "sold" => "بيع" ,
    "rent" => "ايجار"

];

?>

<article style="margin : 100px auto;" class="continer" dir="rtl">
    <section class="row">
        <div class="col-lg-6 col-sm-12">
            <img src="images/sold.jpg" alt="pharmacist">
            <div class="image_des">
                صيدليات للبيع
                <div class="dropdown-divider" style="opacity: .3;"></div>
                <form action="../index.php" method="GET">
                    <div class="form-group" id="gov">
                        <label for="govs">المحافظات</label>
                        <select class="form-control" id="govs" name="gov" required>
                            <option value="" selected disabled>__اختر المحافظة__</option>
                            <option value="1">شمال سيناء</option>
                            <option value="2">الاسماعيلية</option>
                            <option value="3">السويس</option>
                            <option value="4">بورسعيد</option>
                            <option value="5">القاهرة</option>
                            <option value="6">الاسكندرية</option>
                        </select>
                    </div>
                    <input type="text" name="item" value=<?php echo $items["sold"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title_sold; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 second">  
            <img src="images/rent.jpeg" alt="rent_pharmacy">
            <div class="image_des">
                صيدليات للايجار
                <div class="dropdown-divider" style="opacity: .3;"></div>
                <form action="../index.php" method="GET">
                    <div class="form-group" id="gov">
                        <label for="govs">المحافظات</label>
                        <select class="form-control" id="govs" name="gov" required>
                            <option value="" selected disabled>__اختر المحافظة__</option>
                            <option value="1">شمال سيناء</option>
                            <option value="2">الاسماعيلية</option>
                            <option value="3">السويس</option>
                            <option value="4">بورسعيد</option>
                            <option value="5">القاهرة</option>
                            <option value="6">الاسكندرية</option>
                        </select>
                    </div>
                    <input type="text" name="item" value=<?php echo $items["rent"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title_rent; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form> 
            </div>
        </div>
    </section>
</article>