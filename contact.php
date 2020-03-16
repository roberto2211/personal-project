<?php

// require ReCaptcha class
require('recaptcha-master/src/autoload.php');

// include classes
include_once "config/database.php";
include_once "objects/profile.php";
// get database connection
$database = new Database();
$db = $database->getConnection();
 



// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

// ReCaptch Secret
$recaptchaSecret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

// let's do the sending

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);


try {
    if (!empty($_POST)) {

        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);



     //   if (!$response->isSuccess()) {
       //     throw new \Exception('ReCaptcha was not validated.');
        //}
        
        // everything went well, we can compose the message, as usually
     


//traitement du formulaire 
    /*  ushobora gu testa niba toutes les valeurs za formulaire zabaye transmises */ /*isset(var)*/
                 $nom = stripslashes(trim($_POST['name']));
                 $prenom = stripslashes(trim($_POST['surname']));
                 $mail = stripslashes(trim($_POST['email']));
                 $message = stripslashes(trim($_POST['message']));
                 $ip = $_SERVER['REMOTE_ADDR'];
                 // $date = stripslashes(getdate());

                $profile = new Profile($db);


                    // set product property values
                    $profile->firstName = $nom;
                    $profile->lastName = $prenom;
                    $profile->email = $mail;
                    $profile->message = $message;
                    $profile->ip = $ip;
                    $profile->created = date('Y-m-d H:i:s');
                 
                    $profile->save();

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
} catch (\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
} else {
    echo $responseArray['message'];
}

