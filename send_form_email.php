<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "chris.lindekens@gmail.com";
 
    $email_subject = "Someone filled out the SSDM contact form!";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<html>
			  <head>
              <link rel='stylesheet' href='css/skeleton.css'>
			  <meta name='viewport' content='width=device-width, initial-scale=1'>
			  </head>
			  <body>
			  <div style='margin-top: 10%; padding: 0 20px; text-align: center; font-family: Roboto;'>Sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below:<br /><br />";
 
        echo $error."<br />";
 
        echo "Please go back and fix these errors.<br /><br />";
		
		echo "<a style='
			  display: inline-block;
			  height: 38px;
			  padding: 0 30px;
			  color: #555;
			  text-align: center;
			  font-family: Arial, Helvetica, sans-serif;
			  font-size: 11px;
			  line-height: 38px;
			  letter-spacing: .1rem;
			  text-transform: uppercase;
			  text-decoration: none;
			  white-space: nowrap;
			  border-radius: 4px;
			  border: 1px solid #bbb;
			  cursor: pointer;
			  box-sizing: border-box; 
			  background: #f4f4f4;
			  background: -moz-linear-gradient(top,  #f4f4f4 0%, #e5e5e5 100%);
			  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f4f4f4), color-stop(100%,#e5e5e5));
			  background: -webkit-linear-gradient(top,  #f4f4f4 0%,#e5e5e5 100%);
			  background: -o-linear-gradient(top,  #f4f4f4 0%,#e5e5e5 100%);
			  background: -ms-linear-gradient(top,  #f4f4f4 0%,#e5e5e5 100%);
			  background: linear-gradient(to bottom,  #f4f4f4 0%,#e5e5e5 100%);
			  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f4f4', endColorstr='#e5e5e5',GradientType=0 );' 
			  onClick='history.go(-1);'>Back</a>";
			  
	    echo "</div>
			  </body>
			  </html>";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The <b>Email Address</b> you entered is not valid.<br /><br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'You must enter a <b>First Name</b>.<br /><br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'You must enter a <b>Last Name</b>.<br /><br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'You must enter a <b>Comment</b>.<br /><br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>

<!-- include your own success html here -->
<html>
<head>
<link rel="stylesheet" href="css/skeleton.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
  <div class="twelve columns thank-you">
	<p style="font-size: 1.5rem;">Thank you for contacting us. We will be in touch with you very soon.</p>
    <a class="button" href="index.php">Home</a>
  </div>
</div>
</body>
</html>
 
 
<?php
 
}
 
?>