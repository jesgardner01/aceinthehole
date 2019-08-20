<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole - Registration</title>
        <meta name="description" content="#.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet/less" type="text/css" href="../css/style.less"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
        <!--[if lt IE 9]>

        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Success!</h1>
                <p>Your registration was submitted to our database. See you soon!<br>
                    Event Registering For: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
                    Gender Identification: <?php echo htmlspecialchars($registration, ENT_QUOTES, 'UTF-8'); ?><br>
                  First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Are you an: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
                  Subject: <?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                    Address: <?php echo htmlspecialchars($myaddress, ENT_QUOTES, 'UTF-8'); ?><br>
                    City: <?php echo htmlspecialchars($mycity, ENT_QUOTES, 'UTF-8'); ?><br>
                    State: <?php echo htmlspecialchars($mystate, ENT_QUOTES, 'UTF-8'); ?><br>
                    Zipcode: <?php echo htmlspecialchars($myzipcode, ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Number: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                    Age: <?php echo htmlspecialchars($mygroup, ENT_QUOTES, 'UTF-8'); ?><br>
                    Subject: <?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>