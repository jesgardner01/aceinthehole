<!doctype html>
<!--
File Name: index.html
Date: 07/24/2019
Programmer: Jessica Gardner
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole</title>
  <!--font-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet/less" type="text/css" href="../css/style.less"/>
</head>
<body>

<h1 class="title">Ace in the Hole</h1>
    <header class="header">

        <?php include '../includes/nav.inc.html.php'; ?>
</header>

  <main>
      <div id="gallery">
 <section id="gallery">
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/runningintowater.jpg" alt="Runner" id="runner1">
    <div class="text">Running</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/swimming1.jpg" alt="Swimming" id="swimming2">
    <div class="text">Swimming</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/triatholan.jpg" alt="triatholan" id="triatholan3">
    <div class="text">Triatholan</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">
    </a>
  <a class="next" onclick="plusSlides(1)">
    </a>
</div>
<br>
     <!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>   
    
    </section> 
    </div>
      
    <section id="about">
    <h2 class="about">ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
        <h2 class="event">ABOUT THE EVENT</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        
      </section>

      <?php include '../includes/footer.inc.html.php'?>
      
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
    

    
    </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
<script src="script/script.js"></script>

</body>
</html>