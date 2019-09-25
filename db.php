<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "ontap");
mysqli_query($con, "SET NAMES 'utf8'");
?>