 <?php
require_once 'vendor/autoload.php';

use PHPGangsta\GoogleAuthenticator\GoogleAuthenticator;

// Generate an OTP
$ga = new GoogleAuthenticator();
$secret = $ga->createSecret(); // Generate a new secret key
$otp = $ga->getCode($secret);

echo "Generated OTP: " . $otp;
?>
