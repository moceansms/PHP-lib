PHP sample code for integration with MoceanSMS gateway.

With MoceanSMS REST API you can send and receive SMS message, query account balance and pricing info.

Read more over at <a href="https://dev.moceansms.com/restapi">dev.moceansms.com/restapi</a>

Examples
--------------

1) Send SMS

    include ("MoceanSMS.php");
    $moceansms_rest = new MoceanSMS('account_username', 'account_password');
    $rest_response = $moceansms_rest->sendSMS('Mocean', '60173788399', 'Hello!');
    echo $rest_response;


2) Receive SMS 

    include ( "MoceanSMS.php" );
    $moceansms_rest = new MoceanSMS();
    parse_str(file_get_contents("php://input"), $dlrData);
    $rest_response = $moceansms_rest->receiveDLR($dlrData);
    echo $rest_response;   



3) Query account balance

    include ("MoceanSMS.php");
    $moceansms_rest = new MoceanSMS('account_username', 'account_password');
    $rest_response = $moceansms_rest->accountBalance();

