<!DOCTYPE html>
<html lang="en">
<head>
  <title>Screen Scientific D &amp; M | Contact</title>
  <meta name="keywords" content="screen scientific, screenscientific, chris lindekens, ssdm, UI/UX design, web development, responsive website, html 5, portfolio">
  <meta name="description" content="Welcome to Screen Scientific D & M, portfolio of UI/UX designer and front-end web developer, Chris Lindekens.">
  <?php include("includes/meta.php"); ?>
  <!-- if accessing bootstrap through CDN --
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<body>

<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <h1><a class="navbar-brand" href="/">screenscientific</a></h1>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="about.php">about</a></li>
        <!--
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        -->
        <li><a href="web.php">web</a></li>
        <li><a href="print.php">print</a></li>
        <li><a href="lab.php">lab</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="about">
  <div class="container">
    <div class="titles">
      <h2>contact</h2>
      <span>ways to send me stuff!</span>
      <p>Thank you for taking an interest in SSDM.  Send a message by filling out the required * fields below and press submit.  A response to your email will be answered within 12 hours.
      </p>
    </div>
  </div>
  <div class="container contact">
    <form name="contactform" method="post" action="send_form_email.php">
    <div class="col-md-3">
      <label for="first_name">First Name <span>*</span></label>
      <input name="first_name" type="text">
      
      <label for="last_name">Last Name <span>*</span></label>
      <input name="last_name" type="text">
    </div>
    <div class="col-md-3">
      <label for="email">Email Address <span>*</span></label>
      <input name="email" type="text">
      
      <label for="telephone">Telephone</label>
      <input name="telephone" type="text">
    </div>
    <div class="col-md-6 ta">
      <label for="comments">Comments <span>*</span></label>
      <textarea name="comments"></textarea>
      
      <input type="submit" value="Submit">
    </div>
    </form>
    <div class="col-md-12 landing">
      <br /><br />
	  <ul>
        <li class="email"><span>e-mail</span>&nbsp; <a href="mailto:chris.lindekens@gmail.com">chris.lindekens@gmail.com</a></li>
        <li class="phone"><span>phone</span>&nbsp; <a href="tel:+9494121066">949-412-1066</a></li>
      </ul>
    </div>
  </div> 
</div>

<?php include("includes/footer.php"); ?>
</body>
</html>