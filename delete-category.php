<?php

require('settings.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM category where id = {$id}";
    if ($conn->query($delete_sql)){
        header('Location: all-categories.php');
    }else{
        die($conn->error);
//        header('Location: error.php');
    }
}
