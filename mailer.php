<?php

if(isset($_POST['submit']))
{
    $User_name = $_POST['name'];
    $phone  = $_POST['phone'];
    $user_email  = $_POST['email'];
    $user_message = $_POST['message'];
    
    $email_from = 'pacificjoni@gmail.com'; 
    $email_subject = "Add Your Subject Here";
    $email_body = "Name: $User_name.\n".
                    "Phone: $phone.\n".
                    "Email: $user_email.\n".
                    "Message: $user_message.\n";
    
    $to_email = "pacificjoni2@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $user_email \r\n";
    
    $secretKey = "6LcZKwEVAAAAAJx_iVCpV3S6n3VOYWhpN3fH8Bml";
    $responseKey  = $_POST['g-recaptcha-response'];
    $UserIP  = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
    
    $response = file_get_contents($url);
    $response = json_decode($response);
    
    if ($response->success)
    {
        mail($to_email,$email_subject,$email_body,$headers);
        echo "Message Sent Successfully";
    }
    else{
        echo "Invalid Chaptcha, Please Try Again";
    }
}
?>