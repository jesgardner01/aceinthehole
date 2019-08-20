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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--less-->
    <link rel="stylesheet/less" type="text/css" href="../css/style.less"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>


</head>

<body>

<h1 class="title"> ACE IN THE HOLE MULTISPORT EVENTS</h1>
<header class="header">
    <?php include '../includes/header.inc.html.php'; ?>
        <?php include '../includes/nav.inc.html.php'; ?>
</header>

  <main>
<br>
       <div class="container">
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="registration">
      <form method="post" action="?">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/> <br>
        <label for="registration">*Event Registering For:</label>
        <select name="event" id="event">
          <option>Choose Your Event</option>
          <option value="lcswim">Long Course Triathlon</option>
          <option value="lcbike">Olympic Triathlon</option>
          <option value="halfmar">Half Marathon</option>
          <option value="sprint">Sprint Triathlon</option>
          <option value="trytri">Try-a-Tri</option>
          <option value="splash">Splash n Dash</option>
            </select>
          <label for="registration">*Gender Identification:</label>
          <select name="gender" id="gender">
          <option value="fmale">Female</option>
          <option value="male">Male</option>
          <option value="nonbi">Non-Binary</option>
        </select>
          
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required placeholder="Your name..">
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required placeholder="Your last name..">   
        <label for="myaddress">Address:</label>
          <input type="text" name="myaddress" id="myaddress">
          <label for="mycity">City:</label>
          <input type="text" name="mycity" id="mycity">
          <label for="mystate">State:</label>
          <input type="text" name="mystate" id="mystate">
          <label for="myzipcode">Zipcode:</label>
          <input type="text" name="myzipcode" id="myzipcode">
          <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
          <label for="myphone">Emergency Phone:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mygroup">*Age</label>
          <input type="number" name="mygroup" id="mygroup" min="1" max="100" required>
    <textarea id="subject" name="subject" placeholder="Any Special Accommodations...?" style="height:200px"></textarea>
    <input id="mysubmit" type="submit" value="Submit">
          
      </form>
      </div>
      </div>
 <footer>

     <?php include '../includes/footer.inc.html.php'?>
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
    
</footer>   
    
    </main>

<script type="text/javascript" src="../script/script.js"></script>
    
</body>
</html>