<div id="caption" style="margin:5rem auto 0px auto;">

    <?php

    if(!empty($_SESSION["message_user_repeated"])){

    ?>

    <div class="alert alert-danger" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["message_user_repeated"]; ?></div>

    <?php

        unset($_SESSION["message_user_repeated"]);

    }


    ?>

   Sign Up  

</div>
<div id="form_container" style="margin-top : 30px;">

    <form action="../project/handles/sign_up_handle.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user name " name="user_name" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">تسجيل في الموقع</button>
    </form>

</div>


<script>
    var user_name = document.getElementById("exampleInputEmail1");

    window.onload = ()=>{

        user_name.focus();


    }
</script>