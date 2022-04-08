<?php
    include("connect.php");
    $id = $_GET['id'];
    
    // SQL script for deleting an item
    
    
    mysqli_query($conn,$sql);    
    header("location:products.php");
?>