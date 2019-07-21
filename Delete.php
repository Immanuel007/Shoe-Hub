<?php
//check if the $_GET superglobal has the data(id)
if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];
    include 'Config.php';
    $sql = "DELETE FROM `personal` WHERE id='$id'";
    if(mysqli_query($connect, $sql)){
        echo "record deleted successfully";
        header("location:Index.php");
    }else{
        echo 'Deletion unsuccessful';
    }
}
?>
