<?php
 
$to = 'brightamponsah11@gmail.com';
$subject= "TestMail"; 
$message = "Testing my sent mail";

if(mail($to,$subject,$message)){
    echo "mail sent";
}else{
    echo "mail not sent";
};



?>