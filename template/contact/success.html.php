<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole - Contact</title>
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
                <p>Your inquiry was submitted to our database. We will be in contact soon!<br>
                  First Name: <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($lname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Are you an: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
                  Subject: <?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>