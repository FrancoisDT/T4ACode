<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['phonenumber'] = $_POST['phonenumber'];
$_SESSION['isp'] = $_POST['isp'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$phonenumber = $mysqli->escape_string($_POST['phonenumber']);
$isp = $mysqli->escape_string($_POST['isp']);
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error()); 
// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
	?>
	<script>
	window.location = "error.php";
	</script>
<?php    
}
else { // Email doesn't already exist in a database, proceed...

    $sql = "INSERT INTO users (first_name, last_name, email, password, phonenumber, isp, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password','$phonenumber','$isp', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php) 
		$from    = 'info@trackingforafrica.com';
        $to      = $email;
        $subject = 'Account Verification ( TrackingforAfrica.com )';
        $message_body = '
        Hello '.$first_name.',
        Thank you for signing up!
        Please click this link to activate your account:
        http://trackingforafrica.com/verify.php?email='.$email.'&hash='.$hash.''.'
		After Verification process is complete, sign up to Altech Netstar'; 
		$headers = "From: $from"; 
         mail( $to, $subject, $message_body, $headers, "-f " . $from );
		//$from    = 'info@trackingforafrica.com';
		//$to      = $phonenumber.'@'.'smssturen.com';
		//$subject = 'Use Subject line DAMNIT';
		//$message = 'Your account has been activated, keep this code for identification'.'T4A'.'code';
		//mail ($to , '', $message);
		?>
		<script>
		window.location = "Profile.php";
		</script>		
		<?php
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
		?>
		<script>
		window.location = "error.php";
		</script>
		<?php
    }

}