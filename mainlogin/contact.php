<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_phone = $_POST['cf_phone'];
$field_message = $_POST['cf_message'];

$mail_to = 'info@trackingforafrica.com';

$subject = 'Message from a site visitor ' . $field_name;
$headers = "From: $cf_email\r\n";
$headers .= "Reply-To: $cf_email\r\n";
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone Number: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'Homepage.php';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to john@trackingforafrica.com');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>
<?php
}?>

