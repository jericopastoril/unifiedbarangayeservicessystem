<? 

$to      = 'johnmatthew.miguel.garcia@gmail.com, bhsunibass@gmail.com'; 

$subject = 'The test for php mail function'; 

$message = 'Hello'; 

$headers = 'From: bhsunibass@gmail.com' . "\r\n" . 

    'Reply-To: test@test.com' . "\r\n" . 

    'X-Mailer: PHP/' . phpversion(); 

if(mail($to, $subject, $message, $headers)){
echo "sent";    
}


?>