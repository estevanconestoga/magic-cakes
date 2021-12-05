<?php
if (!isset($_POST['btnSubmit']))
{
  include "formContact.php";
  return;
}

require 'connect.php';

$errors=[];

if(!empty($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name = NULL;
	$errors['name'] = "* Please enter your name";
}


if(!empty($_POST['email'])) {
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] =  "* Your email is incorrect '$email' ";
        $email = NULL;        
    }
}else{
    $errors['email'] =  "* Please enter your email ";
    $email = NULL;        
}


if(!empty($_POST['message'])) {
	$message = $_POST['message'];
} else {
	$message = NULL;
	$errors['message'] = "*  Please text a message ";
}

if (count($errors)>0)
{
  include "formContact.php";
  return;
}


$name_clean = prepare_string($sql_connection, $name);
$email_clean = prepare_string($sql_connection, $email);
$message_clean = prepare_string($sql_connection, $message);

$q = "INSERT INTO contact(UserName, Email, Message) VALUES(?, ?, ?)";

$stmt = mysqli_prepare($sql_connection, $q);
mysqli_stmt_bind_param(
	$stmt,
	'sss',
	$name_clean,
	$email_clean,	
	$message_clean
);

$result = mysqli_stmt_execute($stmt);
if (!$result)
{
	$errors[]="* Error Access DB";
}

if(count($errors)==0)
{?>
    <h2 class="title-result"> Thank you for your information!</h2>
<?php
}else
{
  foreach($errors as $err)
	{
		echo "<span>$err</span>";
	}
}
?>