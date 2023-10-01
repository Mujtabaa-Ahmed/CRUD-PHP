<?php
include("connection.php");
$forDelete = $_GET['deleteid'];
$delete = "DELETE FROM `data` WHERE `data`.`id` = $forDelete";
$run = mysqli_query($connect , $delete);
if ($run) {
    echo "<script>alert('data deleted')</script>";
    header("location:reade.php");
}

?>