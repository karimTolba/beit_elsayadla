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

        height : 50%;
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

            font-size: 15px;
            padding-bottom : 5px;
            height : 60%;

        }
        .se{

            padding-top : 5px;
            padding-bottom : 10px;
            height : 67%;  

        }
        img , .image_des{

            width : 80%;

        }

}
</style>

<?php $jop_title = [

    "first" => "صيدلى%20ثان%20ابحث%20عن%20عمل" ,
    "second" => "صيدلى%20مدير%20ابحث%20عن%20عمل" ,
    "third" => "عامل%20في%20صيدلية%20ابحث%20عن%20عمل" ,
    "forth" => "وظيفة%20في%20صيدلية"

]; 

$place = "parts_of_index_page/show_jops_ad.php";

$title="عرض%20اعلان%20الوظائف";

?>

<article style="margin : 100px auto;" class="continer" dir="rtl">
    <section class="row">
        <div class="col-lg-6 col-sm-12">
            <img src="images/pharmacist.jpg" alt="pharmacist">
            <div class="image_des">
                صيدلى ثان ابحث عن عمل
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
                    <input type="text" name="jop_title" value=<?php echo $jop_title["first"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 second">    
            <img src="images/pharmacist_manager.jpg" alt="pharmacist_manager">
            <div class="image_des se">
                صيدلى مدير ابحث عن عمل
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
                    <input type="text" name="jop_title" value=<?php echo $jop_title["second"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 second">
            <img src="images/worker.jpg" alt="worker">
            <div class="image_des">
                عامل في صيدلية ابحث عن عمل
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
                    <input type="text" name="jop_title" value=<?php echo $jop_title["third"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form>
            </div>
        </div>
        <div  class="col-lg-6 col-sm-12 second">
            <img src="images/any_jop.jpg" alt="">
            <div class="image_des">
                وظيفة في صيدلية
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
                    <input type="text" name="jop_title" value=<?php echo $jop_title["forth"]; ?> hidden>
                    <input type="text" name="title" value=<?php echo $title; ?> hidden>
                    <input type="text" name="place" value=<?php echo $place; ?> hidden>
                    <div class="form-group" style="padding-top : 20px;text-align : center;">
                        <input type="submit" class="btn btn-lg btn-info" value="بحث"> 
                    </div>  
                </form> 
            </div>
        </div>
    </section>
</article>