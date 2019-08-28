<?php

$message = "
<html>
<head>
<title>HTML emaaaaaail</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>mohd</td>
<td>ameen</td>
</tr>
</table>
</body>
</html>
";
$to = "where the email is to be recieved";
$subject = "HTML email tst";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <example@example.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";

if(mail($to,$subject,$message,$headers))
{
    print "<h1> success</h1>";
    
}
?>
