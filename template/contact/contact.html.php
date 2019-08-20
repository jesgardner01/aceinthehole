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
      
      <p>Feel free to contact us in regards with any questions you may have!</p>
      <div class="container">
          <form method="post" action="?" id="inquiryForm">

    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="event">Are you an:</label>
    <select id="event" name="event">
      <option value="athlete">Athlete</option>
      <option value="volunteer">Volunteer</option>
      <option value="inparty">Interested Party</option>
    </select>
    <label for="subject">Subject:</label>
    <textarea id="subject" name="subject" placeholder="Question or Comments?" style="height:200px"></textarea>
<label for="myemail">*Email:</label>
    <input type="email" name="myemail" id="myemail" required>
    <input type="submit" value="Submit">

  </form>
</div>

      <footer>

          <?php include '../includes/footer.inc.html.php'?>

          <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>

      </footer>

  </main>

<script type="text/javascript" src="../script/script.js"></script>

</body>
</html>