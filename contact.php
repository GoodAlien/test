<?php
/* Set e-mail recipient */
$myemail  = "gk.videoedit@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$subject  = check_input($_POST['subject'], "Write a subject");
$email    = check_input($_POST['email']);
// $website  = check_input($_POST['website']);
// $likeit   = check_input($_POST['likeit']);
// $how_find = check_input($_POST['how']);
$message = check_input($_POST['message'], "Write your comments");

/* If e-mail is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
//     show_error("E-mail address not valid");
// }

/* If URL is not valid set $website to empty */
// if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
// {
//     $website = '';
// }

/* Let's prepare the message for the e-mail */
$message = "Hello!

You have a massage from:

Name: $name
E-mail: $email
Subject: $subject
Comments:
$message

End of message.
";

/* Send the message using mail() function */
// $from  = "From: $email <$email> \r\n Reply-To: $email \r\n"; 
// mail($myemail, $subject, $message, $from);
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
/* $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html'; header("Location: $redirect"); */
/* echo("<script>location.href = 'http://dizain-mebel.by/m/#contact';</script>"); */
/* echo "<center><img src='img/valid.png'></center>"; */
/* header('Location: index.html'); */
/* exit();*/


/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

/*function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}*/
?>