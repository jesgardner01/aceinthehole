
<?php

if ((!empty($_POST['fname'])) && (empty ($_POST['honeypot']))) {

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=jessica6_ace_db', 'jessica6_ace_db_user', 'MyP4ssWorD1234');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    } catch (PDOException $e) {
        $error = 'Unable to connect to the database server.';
        include '../includes/error.html.php';
        exit();
    }
    include '../includes/db.inc.php';

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $event = $_POST['event'];
    $subject = $_POST['subject'];
    $myemail = $_POST['myemail'];


    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO contact SET
          fname = :fname,
          lname = :lname,
          event = :event,
          subject = :subject,
          myemail = :myemail';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':event', $event);
        $s->bindValue(':subject', $subject);
        $s->bindValue(':myemail', $myemail);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Unable to connect' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs

    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false

} else {

    include 'contact.html.php';

} //Modify this to include the initial file for this folder
?>