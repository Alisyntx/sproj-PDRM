<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\ApiException;
use Infobip\Model\SmsAdvancedTextualRequest;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;

require __DIR__ . "../vendor/autoload.php";

// Your database connection code goes here...
$conn = mysqli_connect("localhost","root","","disasterdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve contact numbers from the database
$query = "SELECT usr_contact FROM user";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $number = $row['usr_contact'];
        $msg = $_POST["message"];
        $fnumber = '+63' . $number; // Assuming you always want to add the '+63' prefix

        // Your SMS sending code goes here...
        sendSMS($fnumber, $msg);
        
        // Add some delay between sending messages to avoid rate limiting
        usleep(500000); // Sleep for 0.5 seconds (500,000 microseconds)
    }

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

// Function to send SMS (replace this with your actual SMS sending code)
function sendSMS($number, $message) {
    $configuration = new Configuration(
        host: 'https://3gm2pw.api.infobip.com',
        apiKey: 'e2d1fb5da49d2bd06916621971a8ad6d-d22bb328-ba5a-4257-8d1a-b09b388cc4de'
    );

    $sendSmsApi = new SmsApi(config: $configuration);

    $message = new SmsTextualMessage(
        destinations: [
            new SmsDestination(to: $number)
        ],
        from: 'ali',
        text: $message
    );

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    try {
        $smsResponse = $sendSmsApi->sendSmsMessage($request);
    } catch (ApiException $apiException) {
        // Handle API exception if needed
    }

    echo 'message sent';
}
?>
