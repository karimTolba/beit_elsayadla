<style>
    
    .img_con img{

        width : 100%;
        height : 400px;    

    }

</style>

<?php 

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $id = $_GET["id"];

    $gov_id = $_GET["gov_id"];

    $sql = "select * , (select gov_name from govs where id = '$gov_id') as gov_name from pharmacy_reg_convay where id = '$id'";

    $results = [];

    $return_value = $con->query($sql); 

    while($data = $return_value->fetch_assoc()){

        array_push($results , $data);

    }
    
?>

<article id="art">
    <section>
            <div id="form_container" style="margin : 50px auto 100px auto;">
            <form action="handles/adver_control_handle.php" method="post" dir="rtl" style="text-align : right;">
                <div class="form-group">
                <label for="exampleFormControlInput1">اسم الصيدلية</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["name"]); ?>" name="name" disabled>
                <input type="text" class="form-control" id="exampleFormControlInput1" value=<?php echo $id; ?> name="id" hidden>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">المحافظة</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["gov_name"]); ?>" name="gov_name" disabled>
            </div>
            <input type="text" class="form-control" id="exampleFormControlInput1" value=<?php echo $gov_id; ?> name="gov" hidden>  
            <div class="form-group">
                <label for="area">المنطقة</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["location"]); ?>" name="location" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">العنوان</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adress" disabled><?php echo utf8_decode($results[0]["adress"]); ?></textarea>
            </div>
            <div class="form-group">
                <label for="mob_number_input">التليفون المحمول</label>
                <input type="text" class="form-control" id="mob_number_input" value=<?php echo utf8_decode($results[0]["tel_mob"]); ?> name="tel_mob" disabled>
            </div>
            <div class="form-group">
                <label for="earth_number_input">التليفون الارضى</label>
                <input type="text" class="form-control" id="earth_number_input" value="<?php echo utf8_decode($results[0]["tel_ear"]); ?>" name="tel_ear" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ايجار / بيع</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value=<?php echo utf8_decode($results[0]["operation_name"]); ?> name="operation_name" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">االتفاصيل</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="6" name="details" disabled><?php echo utf8_decode($results[0]["details"]); ?></textarea>
            </div>
            <div class="img_con">
                <img src=<?php echo "../images/".$results[0]["pharmacy_image"]; ?> alt="">
            </div>
            <input type="text" name="pharmacy_image" value="<?php echo $results[0]["pharmacy_image"] ?>" hidden>
            <input type="text" name="date_time" value="<?php echo $results[0]["date_time"] ?>" hidden>
            <div class="form-group" style="padding-top : 20px">
                <input type="submit" class="btn btn-lg btn-info" id="submit" value="تاكيد">
                <a class="btn btn-lg btn-danger" href=<?php echo "handles/adver_control_delete_handle.php?id=".$id; ?> >
                    حذف
                </a> 
            </div>  
            </form>
        </div>   
    </section>
</article>

<script>

    const form_control = document.getElementsByClassName("form-control");
    const submit = document.getElementById("submit");

    submit.onclick = ()=>{

        for(let i = 0 ; i <= form_control.length - 1;i++){

            form_control[i].removeAttribute("disabled");

        }

    }

</script>