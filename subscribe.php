
<?php
ini_set("display_errors",1);
// Fetching Values from URL.
$R=$_REQUEST;

// print_r($R);
// die();

$email = filter_var($R['email'], FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed

   
$subject = $R['name'];
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $R['email']. "\r\n"; // Sender's Email
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message
$template = '<div style="padding:50px; color:white;">Hello ' . $R['name'] . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. 'Email:' . $R['subscribe'] . '<br/>'
. 'This is a Contact Confirmation mail.'
. '<br/>'
. 'We Will contact You as soon as possible .</div>';
$sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
$send=mail("hr@blockon.tech", $subject, $sendmessage, $headers);
    if($send){
    header("Location:index.html?msg=Your Query has been received, We will contact you soon.");
    }
    else{
        echo "error";
    }

}
} else {
echo "<span>* invalid email *</span>";
}
?>
