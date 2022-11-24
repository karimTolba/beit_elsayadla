<style>
    #control-list{ 

        margin : 200px auto;

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
            margin: 150px auto;

        }

        #control-list li{

            width : 80%;
            font-size: 20px;
        }

        }    
</style>

<ul id="control-list">
    <li>
        <a href=<?php $place = "parts_of_index_page/news.php";$title="تسجيل%20الاخبار"; echo "?title=" .$title."&place=" .$place; ?>>تسجيل الاخبار <i class="fa-solid fa-file-lines" style="margin-left : 5px;"></i></a>
    </li>
    <li>
        <a href=<?php $place = "parts_of_index_page/view_news.php";$title="استعراض%20الاخبار"; echo "?title=" .$title."&place=" .$place; ?>>
            استعراض الاخبار <i class="fa-solid fa-folder-open"></i></i>
        </a>
    </li>
</ul>