<?php
    use Infobip\Configuration;
    use Infobip\Api\SmsApi;
    
    require __DIR__ . "../vendor/autoload.php";
    
    $prefix = '+63';
    $number = $_POST["number"];
    $fnumber = $prefix.$number;
    $msg = $_POST["message"];
    
        $configuration = new Configuration(
            host: 'https://3gm2pw.api.infobip.com',
            apiKey: 'e2d1fb5da49d2bd06916621971a8ad6d-d22bb328-ba5a-4257-8d1a-b09b388cc4de'
        );
         use Infobip\ApiException;
         use Infobip\Model\SmsAdvancedTextualRequest;
         use Infobip\Model\SmsDestination;
         use Infobip\Model\SmsTextualMessage;
    
         $sendSmsApi = new SmsApi(config: $configuration);
    
         $message = new SmsTextualMessage(
              destinations: [
                   new SmsDestination(to: $fnumber)
              ],
              from: 'ali',
              text: $msg
         );
    
         $request = new SmsAdvancedTextualRequest(messages: [$message]);
    
         try {
              $smsResponse = $sendSmsApi->sendSmsMessage($request);
         } catch (ApiException $apiException) {
              
         }

         echo 'send!'

?>