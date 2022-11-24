<div id="caption" style="margin:5rem auto 0px auto;">

    <?php

    if(!empty($_SESSION["message_user_repeated"])){

    ?>

    <div class="alert alert-danger" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["message_user_repeated"]; ?></div>

    <?php

        unset($_SESSION["message_user_repeated"]);

    }


    ?>

   تسجيل في الموقع  

</div>
<div id="form_container" style="margin-top : 30px;">

    <form action="handles/sign_up_handle.php" method="post" style="text-align : right;direction : rtl;">
    <div class="form-group">
        <label for="exampleInputEmail1">اسم المستخدم</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم " name="user_name" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">كلمة المرور</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور" name="password" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">تاكيد كلمة المرور</label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="تاكبد كلمة المرور"  required>
    </div>
    <div class="alert alert-danger" id="msg" hidden>passowrd field must matching confirm</div>
    <button type="submit" class="btn btn-primary" id="submit">تسجيل</button>
    </form>

</div>


<script>
    const user_name = document.getElementById("exampleInputEmail1");
    const password = document.getElementById("exampleInputPassword1");
    const confirm = document.getElementById("exampleInputPassword");
    const submit = document.getElementById("submit");
    const msg = document.getElementById("msg");

    window.onload = ()=>{

        user_name.focus();

    }

    confirm.oninput = ()=>{
        if(password.value == confirm.value){
            submit.removeAttribute("disabled");
            msg.setAttribute("hidden" , "");
        }
        else{
            submit.setAttribute("disabled" , "");
            msg.removeAttribute("hidden");
        }
    }
    password.oninput = ()=>{
        if(password.value == confirm.value){
            submit.removeAttribute("disabled");
            msg.setAttribute("hidden" , "");
        }
        else{
            submit.setAttribute("disabled" , "");
            msg.removeAttribute("hidden");
        }
    }

    
</script>