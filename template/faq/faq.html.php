<!doctype html>
<!--
File Name: index.html
Date: 07/24/2019
Programmer: Jessica Gardner
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole :: FAQ</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet/less" type="text/css" href="../css/style.less"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

    $(document).ready(function () {
    $("dd").hide();
    $("dt").on("click", function () {
        $(this).toggleClass("open").next().slideToggle();
    });
});
    
    </script>
</head>
<body>

<h1 class="title">Ace in the Hole :: FAQ</h1>
<header class="header">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
</header>


  <main>
    <section id="faq">
        <dl>
            <dt>What are the Rules?</dt> 
            <dd>
            <p> We currently adhere to the USAT Rules for Triathlon &amp; Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>
            </dd>

            <dt>Can I use a personal music device while cycling?</dt>
            <dd>
            <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>
            </dd>

            <dt>Can I use a personal music device while running?</dt>
            <dd>
            <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            </dd>

            <dd><p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice music or awards/points/rankings.</p></dd>
            
            <dd><p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don&#39;t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p></dd>
            <dd><p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p></dd>
            </dl>


<dd><p>Do I need to wear a wetsuit?  No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. 
    Do I have to use a road or racing bike?  No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p></dd>
      
        <h2 class="details">WHAT TO BRING</h2>
        
        
        <p>Watch the weather closely.  The show goes on no matter what the weather is doing. </p> 

        <p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

        <p>Swim:  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>

        <p>Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

        <p>Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don&#39;t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>

        <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
      </section>
 <footer>

     <?php include '../includes/footer.inc.html.php'?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
    
</footer>   
    
    </main>

</body>
</html>