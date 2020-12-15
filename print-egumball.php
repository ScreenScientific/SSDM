<!DOCTYPE html>
<html lang="en">
<head>
  <title>Screen Scientific D &amp; M | eGumball</title>
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
        <li><a href="web.php">web</a></li>
        <li class="active"><a href="print.php">print</a></li>
        <li><a href="lab.php">lab</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="level3">
  <div class="container">
    <div class="titles">
      <h2>eGumball</h2>
      <span><b>industry //</b> SEARCH ENGINE MARKETING</span>
      <br />
      <div class="col-md-7">
         <p>Inc 500 Four time Alumnus, eGumball, is a giant in the local search industry managing thousands of internet marketing campaigns throughout the country. Hired in early 2010 to take an existing brand to the next level with redesigns of their flagship website, directory listing websites, advertising materials and internal administration applications.</p> 
      </div>
      <div class="col-md-5">
		<div class="landing">
		  <ul>
			<li><span>role</span>&nbsp; ART DIRECTION | PRODUCTION/LAYOUT</li>
			<li><span>tech</span>&nbsp; Adobe CS</li>
			<li><span>spec</span>&nbsp; egumball</li>
			<li><span>year</span>&nbsp; 2012</li>
		  </ul>
		</div>
      </div>
    </div>
  </div>
</div>
<div class="random-section ran-cmyk">
	<div class="container"></div>
</div>
<div class="content-images">
	<div class="container">
		<a onclick="openModal();currentSlide(1)"><img src="images/print-egumball-01.jpg" width="100%" height="100%" /></a>
		<div class="sub-text"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;eGumball // Hiring Adverts for Sales Publications (1 - 2)</div>
		<a onclick="openModal();currentSlide(2)"><img src="images/print-egumball-02.jpg" width="100%" height="100%">
		<div class="sub-text"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;eGumball // Hiring Adverts for Sales Publications (3 - 4)</div>
	</div>
</div>
<div class="mini-nav">
	<div class="container">
		<a onclick="history.go(-1);" class="CTA-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp; Prev</a>
		<a class="CTA" href="print.php">See All Print &nbsp;<i class="fa fa-desktop" aria-hidden="true"></i></a>
		<a class="CTA-next" href="print-walt-disney-concert-hall.php">Next &nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
	</div>
</div>
<?php include("includes/footer.php"); ?>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
        <img src="images/print-egumball-01.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 2</div>
        <img src="images/print-egumball-02.jpg" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <div class="column">
      <img class="demo" src="images/print-egumball-01.jpg" onclick="currentSlide(1)" alt="eGumball // Hiring Adverts for Sales Publications (1 - 2)">
    </div>
    <div class="column">
      <img class="demo" src="images/print-egumball-02.jpg" onclick="currentSlide(2)" alt="eGumball // Hiring Adverts for Sales Publications (3 - 4)">
    </div>
  </div>
</div>
</body>
</html>