<?php

include_once("../database/database_connection.php");

session_start();

session_destroy();

$title="الرئيسية";

$place="parts_of_index_page/home_page.php";

header("location:../index.php?title=$title&place=$place&&out=$admin_log_out");



    
