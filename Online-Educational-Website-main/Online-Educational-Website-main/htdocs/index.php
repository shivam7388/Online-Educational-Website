<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
    iframe {
        border: none; /* remove the border */
        overflow: hidden; /* hide the scrollbar */
        padding: 0; /* remove the padding */
        display: none; /* hide all iframes by default */
        height:99vh;
        width:100%;
    }
    .active {
        background-color: #ccc; 
    } 
</style>
<link rel="shortcut icon" href="4logo-blue.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css\about.css">
<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" type="text/css" href="css\kishan.css">
<link rel="stylesheet" type="text/css" href="css\left.css">
<link rel="stylesheet" type="text/css" href="css\NAV.css">
<link rel="stylesheet" type="text/css" href="css\Phone.css">
<link rel="stylesheet" type="text/css" href="css\cscode.css">
<link rel="stylesheet" type="text/css" href="css\header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-okaidia.min.css" />

<title>SmartLearners</title>
</head>

<body >
<?php require 'php/nav.php'; ?>
<div class="con-cousre" id="navBa">
  <ul class="course">
    <li class="home"><a href="" onclick="hideContent()"  aria-current="page"><img src="img/icons8-home-24.png"></a></li>
    <li><a href="#Html"onclick="showPanel(0,'#f5f6fa')" aria-current="page">HTML</a></li>
    <li><a href="#CSS" onclick="showPanel(1,'#f5f6fa')" aria-current="page">CSS</a></li>
    <li><a href="#Javascript" onclick="showPanel(2,'#f5f6fa')" aria-current="page">JAVASCRIPT</a></li>
    <li><a href="#PHP" onclick="showPanel(3,'#f5f6fa')" aria-current="page">PHP</a></li>
    <li><a href="#Python" onclick="showPanel(4,'#f5f6fa')"aria-current="page">PYTHON</a></li>
  <li style="float:right;" class="ser" class=" search-container">
    <button class="search-toggle" onclick="toggleSearch()" value="search"><img src="img/search1.png"></button>
      <form class="search-form" id="searchForm" onsubmit="submitSearch()" action="search.php" method="get">
        <input type="text" placeholder="Search..." name="q">
     </form>
    </li>
 </ul>

 <?php require 'php/html_content.php';?>
 <?php require 'php/css_content.php'; ?>
 <?php require 'php/javascript_content.php'; ?>
 <?php require 'php/php_content.php'; ?>
 <?php require 'php/python_content.php' ;?>

<div id="content">
	<div id="slideshow">
		<div class="slide-wrapper">	
			<div class="slide">
<p class="slide-number">
<h1 align="Center";>
<big>Learning Hub</big>
<img src="img/logo-blue.png" height="70" width="70" style="border-radius:50%"></h1>
<p align="center">"Our website provides web development services using popular programming languages like PHP, HTML, CSS, JavaScript, and Python."</p>
</p>	
			</div>
			<div class="slide">
	<p class="slide-number"><h1 align="Center"><big>Learning Hub</big><img src="img/logo-blue.png" height="70" width="70"style="border-radius:50%"></h1>
<p align="center">This  website is a multi-functional platform that offers  web Development services using popular programming languages such as PHP, HTML, CSS, JavaScript, and python.</p>	
			</div>
			<div class="slide">
<p class="slide-number"><h1 align="Center"><big>Learning Hub</big><img src="img/logo-blue.png" height="70" width="70"style="border-radius:50%"></h1>
<p align="center"><b>"Our website</b> provides web development services using popular programming languages like PHP, HTML, CSS, JavaScript, and Python."</p>
</p>	
			</div>
                         <div class="slide">
<p class="slide-number"><h1 align="Center"><big>Learning Hub</big><img src="img/logo-blue.png" height="70" width="70"style="border-radius:50%"></h1>
<p align="center"><b>Web development</b> is the process of creating and maintaining websites and web applications using various programming languages, frameworks, and tools.</p>
</p>
			</div>
		</div>
	</div>




<div class="section" id="ht">
   <div class="con"style="padding-top: 0px;">
      <div class="con-section">
        <div class="contents"> 
       <div class="autoty">
        <span class="auto auto1"> <h3 id="typ">Welcome to</h3></span><span class="auto auto2">SmartLearner's</span>
       </div>

<p id="fonsiz"> We offer courses in some of the most in-demand programming languages today, including HTML, CSS, JavaScript, Python, and PHP. 
we've created a variety of resources to support your learning, including video lectures and projects.
</p>
           <div class="buttom">
         <a href="php/Course.php">Course</a>
           </div>
       </div>
   </div>
  
     <div class="image-section">
         <img src="img/profile-1.jpg">
    </div>
 </div>
</div>





<h1 class="cen">Recommended Courses</h1>
    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="img/python.webp" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header">Free Course</h1>
            <p class="card-text">
            <h4> Python Tutorials - 100 Days of Code</h4>
             <p>Python is one of the most demanded programming languages in the job market. 
                 Surprisingly, it is equally easy to learn and master Python. 
                Let's commit our 100 days of code to python!
             <h4>&nbsp</h4>
            </p>
        <button class="card-btn"><a href="php/videohtmlpython.php">Start Watching</a> </button>
           </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="img/javascript.jpg"
            alt="Grand Canyon"
          />
          <div class="card-content">
            <h1 class="card-header">Free Course</h1>
            <p class="card-text">
             <h4> Ultimate JavaScript Course</h4>
              <p class="tex">This latest JavaScript course comes with premium curriculum that covers everything from basics to advance.
                 On top of that, you will get my handwritten notes of JS for completely free.
                 What are you waiting for? Just Enroll Buddy.
            </p>
        <button class="card-btn"><a href="php/videojavascript.php">Start Watching </a></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="img/HTML-Tutorials.png"  height="100px" alt="Maldives" />
          <div class="card-content">
            <h1 class="card-header">Free Course</h1>
            <p class="card-text">
            <h4> HTML Tutorials For Beginners</h4>
            <p class="texs">Welcome to our HTML tutorial! In this tutorial 
                we learn web pages, customize existing ones, 
                 and understand how web pages are structured. 
               this tutorial is perfect for you. Let's get started!
             <h1>&nbsp</h1>
            </p>
             <button class="card-btn"><a href="php/videohtml.php">Start Watching</a> </button>
         </div>
        </div>
      </div>
    </div>

<h1>&nbsp</h1>
<h1 class="cen">Testimonials</h1>
<h1>&nbsp</h1>
  <div class="wrapp">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>I don't have words to thank this man, I'm really grateful to have this channel and website in my daily routine. If you're a mere beginner, then you can trust this guy and can put your time into his content. I can assure you that it'll be worth it.</p>
      <div class="content">
        <div class="info">
          <div class="name">Alex Smith</div>
          <div class="job">Designer | Developer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="img/profile-1.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>For everyone who wants to level up their #Coding and #Dev skills - seriously, this channel is for you! Both basic and advanced stacks are covered on this channel, and one can learn according to his skill levels. And the icing on the cake is, everything is available for free.</p>
      <div class="content">
        <div class="info">
          <div class="name">Steven Chris</div>
          <div class="job">YouTuber | Blogger</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="img/profile-2.jpeg" alt="">
        </div>
      </div>
    </div>
      </div>
    </div>
  


</div>

<footer id="foot">
<img src="img/logo-blue.png">
<h3 class="foter">SmartLearner's</h3>
<p class="foters">Copyright © 2023 smartlearners.rf.gd</p>
</footer>

<script src="code.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js" > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-javascript.min.js" > </script>
<script src="js/kishan.js"></script>
<script src="js/kishan1.js"></script>
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("#navBar");
        hamburger.onclick = function() {
            nav.classList.toggle("actives");
        }
    </script>

</body>
</html>
