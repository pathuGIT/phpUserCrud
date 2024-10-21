<?php
    $conn = mysqli_connect('localhost:3308', 'root','','student');
    if(!$conn){
        echo 'Connection failed..!';
    }else{
        echo'Connection success..';
    }
?>