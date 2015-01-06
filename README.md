PHP sample code for integration with MoceanSMS API Server.

With MoceanSMS REST API you can send and receive SMS message, query account balance and pricing info.

Read more over at dev.moceansms.com/restapi

Examples
--------------

1) Send SMS

    include ("MoceanSMS.php");
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret');
    $rest_response = $moceansms_rest->sendSMS('Mocean', '60173788399', 'Hello');
    echo $rest_response;


2) Receive DLR 

    include ( "MoceanSMS.php" );
    $moceansms_rest = new MoceanSMS();
    parse_str(file_get_contents("php://input"), $dlrData);
    $rest_response = $moceansms_rest->receiveDLR($dlrData);
    echo $rest_response;   



3) Query account balance

    include ("MoceanSMS.php");
    $moceansms_rest = new MoceanSMS('api_key', 'api_secret');
    $rest_response = $moceansms_rest->accountBalance();

