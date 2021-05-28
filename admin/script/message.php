<?php
include('connect.php');
    $fullName = mysqli_real_escape_string($conn, $_POST['name']);
    // $title = mysqli_real_escape_string($conn, $_POST['title']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $body = mysqli_real_escape_string($conn, $_POST['body']);

    if($_POST['body'] == ""){
        echo "Kindly Provide Your Information";
    }
    else{
        $insert = "INSERT INTO mail (fullname, title, email, body) VALUES ('$fullName', '$title', '$email', '$body')";
        $query = mysqli_query($conn, $insert);
        if($query){
            echo "Message Successfully Sent";
        }
        else{
            echo "Message Not Delivered";
        }
    }
