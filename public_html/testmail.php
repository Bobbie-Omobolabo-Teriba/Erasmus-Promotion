<?php 

    $name="Mail Test";

    //get directory name. It is the same as student ID!
    $email= basename(__DIR__)."@student.dkit.ie"; 

    $message="This mail was successfully sent from your web directory!"; 

    $from="From: $name<$email>\r\nReturn-path: $email"; 

    $subject="Success :)"; 

    mail($email, $subject, $message, $from); 

    echo "Test mail sent to $email. Go check your inbox..."; 

?> 
