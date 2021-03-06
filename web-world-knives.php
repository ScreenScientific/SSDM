<!DOCTYPE html>
<html lang="en">
<head>
  <title>Screen Scientific D &amp; M | World Knives</title>
  <meta name="keywords" content="screen scientific, screenscientific, chris lindekens, ssdm, UI/UX design, web development, responsive website, html 5, portfolio">
  <meta name="description" content="Welcome to Screen Scientific D & M, portfolio of UI/UX designer and front-end web developer, Chris Lindekens.">
  <?php include("includes/meta.php"); ?>
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
        <li><a href="about.php">about</a></li>
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
        <li class="active"><a href="web.php">web</a></li>
        <li><a href="print.php">print</a></li>
        <li><a href="lab.php">lab</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="level3">
  <div class="container">
    <div class="titles">
      <h2>World Knives</h2>
      <span><b>industry //</b> knives & cutlery</span>
      <br />
      <div class="col-md-7">
         <p>World Knives is a leader in online distribution of fine knives and cutlery from around the globe. Hired to design and build a simple and clean, front-end user interface for their e-commerse solution.</p> 
      </div>
      <div class="col-md-5">
		<div class="landing">
		  <ul>
			<li><span>role</span>&nbsp; UI/UX DESIGN | FRONT END DEVELOPMENT</li>
			<li><span>tech</span>&nbsp; HTML/CSS | JQUERY | ADOBE CS</li>
			<li><span>spec</span>&nbsp; OLYMPIC WEB DESIGN</li>
			<li><span>year</span>&nbsp; 2011</li>
		  </ul>
		</div>
      </div>
    </div>
  </div>
</div>
<div class="random-section">
	<div class="container"></div>
</div>
<div class="content-images">
	<div class="container">
		<a onclick="openModal();currentSlide(1)"><img src="images/web-wk-01.jpg" width="100%" height="100%" /></a>
		<div class="sub-text"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;World Knives Website // Home Page Design &amp; Sectional Layout</div>
		<a onclick="openModal();currentSlide(2)"><img src="images/web-wk-02.jpg" width="100%" height="100%">
		<div class="sub-text"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;World Knives Website // Product & Purchase Page</div>
	</div>
</div>
<div class="mini-nav">
	<div class="container">
		<a onclick="history.go(-1);" class="CTA-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp; Prev</a>
		<a class="CTA" href="web.php">See All Web &nbsp;<i class="fa fa-desktop" aria-hidden="true"></i></a>
		<a class="CTA-next" href="web-akorn.php">Next &nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
	</div>
</div>
<?php include("includes/footer.php"); ?>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
        <img src="images/web-wk-01.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 2</div>
        <img src="images/web-wk-02.jpg" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <div class="column">
      <img class="demo" src="images/web-wk-01.jpg" onclick="currentSlide(1)" alt="World Knives Website // Home Page Design &amp; Sectional Layout">
    </div>
    <div class="column">
      <img class="demo" src="images/web-wk-02.jpg" onclick="currentSlide(2)" alt="World Knives Website // Product & Purchase Page">
    </div>
  </div>
</div>
</body>
</html>