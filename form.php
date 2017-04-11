<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];
$length_n=strlen($name);
$length_e=strlen($email);
echo $length_n;
$length_m=strlen($message);
echo $length_m;
if($length_n<=3 || $length_n>=50){
    $_SESSION['error_name']='<span style="color:darkred">Invalid length</span>';
}
else{
    unset($_SESSION['error_name']);
}
if($length_e==0)
{
    $_SESSION['error_email']='<span style="color:darkred">Enter mail</span>';
}
else{
    unset($_SESSION['error_email']);
}

if($length_m<=10 || $length_m>=500){
    $_SESSION['error_message']='<span style="color:darkred"><br>Invalid length message</span>';
}
else{
    unset($_SESSION['error_message']);
}

if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $number)){
    unset($_SESSION['error_number']);
}
else{
    $_SESSION['error_number']='<span style="color:darkred">Invalid number format (000-000-000)</span>';
}

$for="person@example.com";

$headers = "From: \"".$email."\" <".$for.">\n";

$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

mail($for, 'Wiadomosc ze strony',$wiadomosc,$headers);
if(mail($for, 'Wiadomosc ze strony',$wiadomosc,$headers))
{
    $_SESSION['mail']='<span style="color:darkred;margin-left: 23%;">Mail was sent</span>';
}
else
{
    $_SESSION['mail']='<span style="color:darkred;margin-left:23%;">Mail was not sent</span>';
}
$_SESSION['scroll']=1;

header('Location:index.php');
?>
</body>
</html>