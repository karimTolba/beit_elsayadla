<div id="caption" style="margin : 100px auto 0px auto;">

<?php

if(!empty($_SESSION["login_failed"])){


?>

<div class="alert alert-danger" style="text-align : center;width : 40%;margin : 20px auto 20px auto;font-size: 20px;"><?php echo $_SESSION["login_failed"]; ?></div>

<?php

    unset($_SESSION["login_failed"]);

}


?>

   Sign In  

</div>
<div id="form_container" style="margin-top : 50px;">

    <form action="../project/handles/login_page_handle.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user name " name="user_name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">تسجيل دخول</button>
    </form>

</div>


<script>
    var user_name = document.getElementById("exampleInputEmail1");

    window.onload = ()=>{

        user_name.focus();


    }
</script>