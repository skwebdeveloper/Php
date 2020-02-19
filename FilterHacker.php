<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
   // This is bascially used to send E-mails
   $to = "saurabh.1721it1078@kiet.edu";
   $subject = "Learning php";
   $message = "Adding some message";
   mail($to , $subject , $message);
   // This is used to proctect your creditals
   
   $username = "assssssdsdasdaafsDS<script></script>\n";
   echo $username;
   // removal of script tag
   $username = filter_var($username, FILTER_SANITIZE_STRING);
   echo $username;
   // Cleaning E-mail
//   $mail = "asassa$$$$$$$$$2121@kiererc.ededi/////////////////////////////////////enedke\n";
//   $mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
//   echo $mail;
   //Url
   $url = "www.dad                   adada.com//a                        sasdadad\n";
   $url = filter_var($url,FILTER_SANITIZE_URL);
   // Validation concept
   
   $mail = "saasssssssssssssssssssssssssssssssssssssssssssqewqeweqeqweq\n";
   $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
   echo $emailone;
   echo "\n";
   echo "<p>New value is".filter_var($mail, FILTER_VALIDATE_EMAIL)." .Hello Mr.Saurabh Kumar</p>";
   
   
?>
</body>
</html>