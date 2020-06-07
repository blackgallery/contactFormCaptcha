<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
    <!-- TITLE OF SITE -->
    <title>klinarmen - Cleaning Service HTML5 Responsive Template </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="klinarmen - Cleaning HTML Template" />
    <meta name="keywords" content="klinarmen, Cleaning, one page, multipage, responsive, template" />
    <meta name="author" content="klinarmen">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script src="https://www.google.com/recaptcha/api.js"></script>
    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>


                    <div class="col-sm-12">
                        <!--  Contact Form  -->
                        <div class="contact-form">
                            <form method="post" action="mailer.php" id="contact-form">
                                <div class="row">
                                    
                                            <input class="con-field" name="name" id="name" type="text" placeholder="Name">

                                            <input class="con-field" name="phone" id="phone" type="text" placeholder="phone">

                                            <input class="con-field" name="email" id="email" type="text" placeholder="Email">

                                            <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                               
                
<div class="g-recaptcha" data-sitekey="6LcZKwEVAAAAAJx_iVCpV3S6n3VOYWhpN3fH8Bml"></div>

                                            <input type="submit" name="submit" id="submit-contact" class="btn-alt" value="Send Message">
                              
                                    
                                </div>

                            </form>
                        </div>
                        <!-- End:Contact Form  -->
                    </div>


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


<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAa7MGkSGP6QBu1dfDi7O3mKJ7ENwuB0Ew"></script>     

</body>

</html>