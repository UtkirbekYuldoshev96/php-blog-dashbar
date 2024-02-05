<?php
require('../../database.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM news where id = {$id}";
    
    if ($conn->query($delete_sql)){
        header('Location: all-posts.php');
    }else{
        die($conn->error);
    }
}

?>