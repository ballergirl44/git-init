<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);	
include_once('classes/user.class.php');
include_once('classes/register.class.php');
include_once('classes/admin.class.php');	
	
$register = new RegisteredUser('lamspencer','Regular User');
$admin = new Admin('gdcollins','Administrator');

$register->first_name = 'Laurie';
$register->last_name = 'Spencer';
$register->email_address = 'lamspenc@umail.iu.edu';

$admin->first_name = 'Gary';
$admin->last_name = 'Collins';
$admin->email_address = '50calchewy@gmail.com';

?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT31300 - Fall 2017 - Ex. 2 - Laurie M. Spencer</title>
</head>
<body>
<?php
echo "User Level: ". $register->user_level . "<br/>";
echo "Registered User ID: ". $register->user_id ."<br/>";
echo "Registered User Type: ". $register->user_type ."<br/>";
echo "Registered First Name: ". $register->first_name ."<br/>";
echo "Registered Last Name: ". $register->last_name ."<br/>";
echo "Registered Email: ". $register->email_address ."<br/><hr/>";

echo "User Level: ". $admin->user_level . "<br/>";
echo "Admin User ID: ". $admin->user_id ."<br/>";
echo "Admin User Type: ". $admin->user_type ."<br/>";
echo "Admin First Name: ". $admin->first_name ."<br/>";
echo "Admin Last Name: ". $admin->last_name ."<br/>";
echo "Admin Email: ". $admin->email_address ."<br/>";

?>	
	
</body>
</html>