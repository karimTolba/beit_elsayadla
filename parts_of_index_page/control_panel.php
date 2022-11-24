<style>
    #control-list{ 

        margin : 150px auto;

    }
    #control-list li{
        list-style-type: none;
        text-align : center;
        background-color: black;
        margin : 50px auto;
        width : 40%;
        padding : 15px;
        font-size: 30px;
        border-radius : 10px;
        border : 1px solid white;
        transition: all ease-in-out 1s;
        
    }
    #control-list li:hover{

        width : 50%;

    }
    #control-list li a{
        text-decoration: none;
    }

    @media screen and (max-width : 500px){

        #control-list{

            padding : 0px;

        }

        #control-list li{

            width : 80%;
            font-size: 20px;
        }

    }    

</style>

<ul id="control-list">
    <li>
        <a href=<?php $place = "parts_of_index_page/news_items.php";$title="لوحة%20التحكم%20الاخبار"; echo "?title=" .$title."&place=" .$place; ?>>الاخبار<i class="fa-solid fa-file-lines" style="margin-left : 5px;"></i></a>
    </li>
    <li>
        <a href=<?php $place = "parts_of_index_page/adver_control.php";$title="لوحة%20التحكم%20وسيط%20الصيادلة"; echo "?title=" .$title."&place=" .$place; ?>>
            وسيط الصيادلة <i class="fa-solid fa-handshake"></i>
        </a>
    </li>
    <li>
        <a href=<?php $place = "parts_of_index_page/jops_control.php";$title="لوحة%20التحكم%20وظائف"; echo "?title=" .$title."&place=" .$place; ?>>
            الوظائف <i class="fa fa-tasks"></i>
        </a>
    </li>
</ul>