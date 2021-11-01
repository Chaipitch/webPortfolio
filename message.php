<?php
    echo 'This message is sent from PHP file';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "chaipitch6@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nMessage: $message "
            $sender = "From: $email";
            if(mail($receiver,$subject,$body,$sender)){
                echo 'Your message has been sent';
            }else{
                echo 'Sorry, failed to send your message!';
            }
        }else{
            echo 'Enter a valid email address';
        }
    }else{
        echo 'Email and password field is required';
    }
?>