<?php

include_once("/home/vpn2w4bl7xr8/public_html/database/database_connection.php");

$id = $_GET["id"];

$sql = "delete from pharmacy_reg_convay where id='$id'";

$con->query($sql);

$title="لوحة%20التحكم%20وسيط%20الصيادلة";

$place="parts_of_index_page/adver_control.php";

header("location:../index.php?title=$title&place=$place");
