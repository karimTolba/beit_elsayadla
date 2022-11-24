<?php 

    include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

    $id = $_GET["id"];

    $gov_id = $_GET["gov_id"];

    $sql = "select * , (select gov_name from govs where id = '$gov_id') as gov_name from jop_reg_convay where id = '$id'";

    $results = [];

    $return_value = $con->query($sql);

    while($data = $return_value->fetch_assoc()){

        array_push($results , $data);

    }


?>

<article id="art">
    <section>
            <div id="form_container" style="margin : 50px auto 100px auto;">
            <form action="handles/jop_control_handle.php" method="post" dir="rtl" style="text-align : right;">
            <div class="form-group">
                <label for="exampleFormControlInput1">الاسم</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["name"]); ?>" name="name" disabled>
                <input type="text" class="form-control" id="exampleFormControlInput1" value=<?php echo $id; ?> name="id" hidden>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">الوظيفة</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["jop_title"]); ?>" name="jop_title" disabled>
            </div>
            <input type="text" class="form-control" id="exampleFormControlInput1" value=<?php echo $gov_id; ?> name="gov" hidden>
            <div class="form-group">
                <label for="exampleFormControlInput1">المحافظات</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["gov_name"]); ?>" name="location" disabled>
            </div>  
            <div class="form-group">
                <label for="area">المناطق</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_decode($results[0]["location"]); ?>" name="location" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">الخبرات والملاحظات</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="exp_not" disabled><?php echo utf8_decode($results[0]["exp_not"]); ?></textarea>
            </div>
            <div class="form-group">
                <label for="earth_number_input">التليفون الارضى</label>
                <input type="text" class="form-control" id="earth_number_input" value=<?php echo utf8_decode($results[0]["tel_ear"]); ?> name="tel_ear" disabled>
            </div>
            <div class="form-group">
                <label for="mobile_number_input">التليفون المحمول</label>
                <input type="text" class="form-control" id="mobile_number_input" value=<?php echo utf8_decode($results[0]["tel_mob"]); ?> name="tel_mob" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">البريد الالكترونى</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value=<?php echo utf8_decode($results[0]["email"]); ?> name="email" disabled>
            </div>
                <input type="text" name="date_time" value="<?php echo $results[0]["date_time"] ?>" hidden>
            <div class="form-group" style="padding-top : 20px">
                <input type="submit" class="btn btn-lg btn-info" id="submit" value="تاكيد">
                <a class="btn btn-lg btn-danger" href=<?php echo "handles/jop_control_delete_handle.php?id=".$id; ?> >
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