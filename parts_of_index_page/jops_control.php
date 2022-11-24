<?php 

include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

$sql = "select count(*) from jop_reg group by jop_title";

$sql_1 = "select name , jop_title , location , id , (select gov_name from govs where id = govs_id) , govs_id from jop_reg_convay";

$result = $con->query($sql);

$result_1 = $con->query($sql_1);

$sum = 0;

$arr = [];

$arr_1 = [];

while($row = mysqli_fetch_array($result)){

    array_push($arr , $row);

}


while($row = mysqli_fetch_array($result_1)){

    array_push($arr_1 , $row);

}

foreach($arr as $arra){

  $sum  = $sum + $arra[0];
  

}

?>

<style>
    #title , #ca , #no_res{

        text-align : center;
        background-color : green;
        padding : 10px;
        border-radius : 10px;
        width : 40%;
        margin : 50px auto 30px auto;
        font-weight : bold;

    }
    #ca{

        width : 30%;

    }

    #number{

        width : 10%;
        margin : 0px auto 30px auto;
        font-weight : bold;
        background-color: green;
        padding : 15px;
        border-radius : 20px;
        text-align: center;
    
    }
    #table_st{

        direction : rtl;
        background-color : green;
        font-weight : bold;

    }
    #table_cont{

        margin : 50px auto;
        width : 70%;

    }

    #view{

        text-decoration: none;

    }
    
    #no_res{

        margin : 50px auto 130px auto;

    }

    #title{

        margin : 100px auto 30px auto;

    }

    @media screen and (max-width : 500px){
    
        #number{

            width : 20%;

        }

        #title ,#ca , #no_res{

            width : 70%;
        }

        #no_res{

            margin: 80px auto;

        }

        
    }    
</style>


<article>
    <section>
    <div id="title">اجمالى عدد اعلانات الوظائف</div>
    <div id= "number"><?php echo $sum; ?></div>
    </section>
</article>

<div id="ca">اعلانات محتاجة تاكيد</div> 

<?php if($result_1->num_rows >=1){ ?>

<article id="table_cont">
    <section>
    <div class="table-responsive text-nowrap">    
        <table class="table text-center table-bordered table-md" id="table_st">  
        <thead>
            <tr>
            <th class="th-lg" scope="col">الاسم</th>
            <th class="th-lg" scope="col">اسم الوظيفة</th>
            <th class="th-lg" scope="col">المنطقة</th>
            <th class="th-lg" scope="col">المحافظة</th>
            <th class="th-lg" scope="col">استعراض</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach($arr_1 as $arr_1_s){ ?>
                    <tr>
                        <td><?php echo utf8_decode($arr_1_s["name"]); ?></td>
                        <td><?php echo utf8_decode($arr_1_s["jop_title"]); ?></td>
                        <td><?php echo utf8_decode($arr_1_s["location"]); ?></td>
                        <td><?php echo utf8_decode($arr_1_s[4]); ?></td>
                        <td>
                            <a id="view" href=<?php $gov_id = $arr_1_s[5];$id = utf8_decode($arr_1_s["id"]);$place = "parts_of_index_page/view_jop.php";$title="استعراض%20وظيفة"; echo "?title=" .$title."&place=" .$place."&id=".$id."&gov_id=".$gov_id; ?> class="btn btn-sm btn-info">استعراض</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </section>
</article>
<?php }else{ ?>

    <div id="no_res">
        حاليا لا يوجد نتائج
    </div>


<?php }?>    
