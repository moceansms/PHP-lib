<?php

    // 1. Send SMS 

    // Step 1: Include MoceanSMS library file
    include ("MoceanSMS.php");

    // Step 2: Declare new MoceanSMS and specify API key and secret
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret');

    // Step 3: Use sendSMS($from, $to, $message) method to send a message
    $rest_response = $moceansms_rest->sendSMS('Mocean', '60173788399', 'Hello');

    // Response will be returned in JSON format 
    echo $rest_response;
        
    
    
    // 2. Receive DLR
    include ( "MoceanSMS.php" );
    $moceansms_rest = new MoceanSMS();
    parse_str(file_get_contents("php://input"), $dlrData);
    $rest_response = $moceansms_rest->receiveDLR($dlrData);
    echo "mocean-from => $rest_response->from \n";
    echo "mocean-to => $rest_response->to \n";
    echo "mocean-dlr-status => $rest_response->dlr_status \n";
    echo "mocean-msgid => $rest_response->msgid \n";
    echo "mocean-error-code => $rest_response->error_code \n";

    
    
    // 3. Receive SMS
    include ( "MoceanSMS.php" );
    $moceansms_rest = new MoceanSMS();
    $rest_response = $moceansms_rest->receiveMO($_POST);
    echo "mocean-from => $rest_response->from \n";
    echo "mocean-to => $rest_response->to \n"; 
    echo "mocean-keyword => $rest_response->keyword \n"; 
    echo "mocean-text => $rest_response->text \n";
    echo "mocean-coding => $rest_response->coding \n"; 
    echo "mocean-time => $rest_response->time \n"; 
    
    
    
    // 4. Query account balance
    include ("MoceanSMS.php"); 
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret'); 
    $rest_response = $moceansms_rest->accountBalance();     
    echo $rest_response;
    
    
    // 5. Query account pricing
    include ("MoceanSMS.php"); 
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret'); 
    $rest_response = $moceansms_rest->accountPricing(); 
    echo $rest_response;
    
    
    // 6. Query message status
    include ("MoceanSMS.php"); 
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret'); 
    $rest_response = $moceansms_rest->messageStatus('cust20013050311050614001'); 
    echo $rest_response;
    
    
?>
