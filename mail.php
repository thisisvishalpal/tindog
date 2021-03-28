<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "c2buwamsy2pj@sg2plcpnl0162.prod.sin2.secureserver.net";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
if ($name === ''){
  echo "Name cannot be empty.";
  die();
}
if ($email === ''){
  echo "Email cannot be empty.";
  die();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email format invalid.";
    die();
  }
}
if ($subject === ''){
  echo "Subject cannot be empty.";
  die();
}
if ($message === ''){
  echo "Message cannot be empty.";
  die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "c2buwamsy2pj@sg2plcpnl0162.prod.sin2.secureserver.net";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
