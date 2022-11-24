<div id="caption" style="margin : 100px auto 0px auto;">

<?php

if(!empty($_SESSION["login_failed"])){


?>

<div class="alert alert-danger" style="text-align : center;width : 40%;margin : 20px auto 20px auto;font-size: 20px;"><?php echo $_SESSION["login_failed"]; ?></div>

<?php

    unset($_SESSION["login_failed"]);

}


?>

   تسجيل دخول

</div>
<div id="form_container" style="margin-top : 50px;">

    <form action="../handles/login_page_handle.php" method="post" style="text-align : right;direction : rtl;">
    <div class="form-group">
        <label for="exampleInputEmail1">اسم المستخدم</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم " name="user_name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">كلمة المرور</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور" name="password">
    </div>
    <button type="submit" class="btn btn-primary">تسجيل</button>
    </form>

</div>


<script>
    var user_name = document.getElementById("exampleInputEmail1");

    window.onload = ()=>{

        user_name.focus();


    }
</script>