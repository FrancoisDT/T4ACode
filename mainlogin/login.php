<?php
require 'db.php';
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
?>	
    <script>
	window.location = "error.php";
	</script>
<?php	
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = sanitize($user['email']);
        $_SESSION['first_name'] = sanitize($user['first_name']);
        $_SESSION['last_name'] = sanitize($user['last_name']);
        $_SESSION['active'] = sanitize($user['active']);
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
?>
        <script>
		window.location = "Profile.php";
		</script>
<?php
		}
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
?>        
		<script>
		window.location = "error.php";
		</script>
<?php
    }
}
?>
