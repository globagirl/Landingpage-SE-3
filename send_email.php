<?php
/**
 * Created by PhpStorm.
 * User: Khawla-IT
 * Date: 4/14/2021
 * Time: 1:03 PM
 */

if (isset($_POST['submit'])) {

    if(!empty($_POST['website'])) die();//

    date_default_timezone_set("UTC");
    $name = $_POST['name'];
    $bname = $_POST['Bname'];
    $email = $_POST['email'];//visitor email
    $message = $_POST['message'];
    $email_subject = "New LandingPage Form Submission";

    $toAli = "contact@starzelectronics.site";//receiver email
    $toSupp = "support@starzelectronics.com";//receiver email
    $email_body = "Morning,\n".

        "You have received a new message from : $name \n " .
        "\n Business Name: $bname \n " .
        "\n Email address: $email \n " .
        "\n Here is the message: \n $message \n \n".
        "Ps: This email is sent from landing page Starz contact form, in: ". date('Y-m-d H:m:s');

    $header = "From: $email \r\n";

//send the email!
//    mail($toAli, $email_subject, $email_body, $header);
    mail($toAli, $email_subject, $email_body, $header);
    mail($toSupp, $email_subject, $email_body, $header);
//redirect to thank-you page
    header("Location: http://www.starzelectronics.com/thank-you.php");
    die();

} else {
    //this page should not be accessed directly. need to submit the form.
    header("Location: ../error.php");
}
?>