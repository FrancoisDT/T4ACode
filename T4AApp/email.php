<?php
require './config.php';
require './contacts.php';

$from    = 'info@trackingforafrica.com';
        $to      = $_POST['emails'];
        $subject = 'Entry Updated ( TrackingforAfrica.com )';
        $message_body = '
        Hello '.$Responsible_Person.',
        Your task has been updated, please check in on it asap.'.'
		Vertical is '.$Vertical.'
		Client is '.$Client.'.'; 
		$headers = "From: $from"; 
         mail( $to, $subject, $message_body, $headers, "-f " . $from );
		 
		$from    = 'info@trackingforafrica.com';
        $to      = $_POST['AuthorEmails'];
        $subject = 'Entry Updated ( TrackingforAfrica.com )';
        $message_body = '
        (AUTHOR)Hello '.$Responsible_Person.',
        Your task has been updated, please check in on it asap.'.'
		Vertical is '.$Vertical.'
		Client is '.$Client.'.'; 
		$headers = "From: $from"; 
         mail( $to, $subject, $message_body, $headers, "-f " . $from );
?>````````````````````````````````````````````````````````````````````