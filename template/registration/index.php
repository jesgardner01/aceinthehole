<?php
if ((!empty($_POST['fname'])) && (empty ($_POST['honeypot']))) {

try {
    $pdo = new PDO('mysql:host=localhost;dbname=jessica6_ace_db', 'jessica6_ace_db_user', 'MyP4ssWorD1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $event = $_POST['event'];
    $registration = $_POST['registration'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myaddress = $_POST['myaddress'];
    $mycity = $_POST['mycity'];
    $mystate = $_POST['mystate'];
    $myzipcode = $_POST['myzipcode'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mygroup = $_POST['mygroup'];
    $subject = $_POST['subject'];


    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          event = :event,
          registration = :registration,
          myfname = :myfname,
          mylname = :mylname,
          myaddress = :myaddress,
          mycity = :mycity,
          mystate = :mystate,
          myzipcode = :myzipcode,
          myemail = :myemail,
          myphone = :myphone,
          mygroup = :mygroup,
          subject = :subject,';
        $s = $pdo->prepare($sql);
        $s->bindValue(':event', $event);
        $s->bindValue(':registration', $registration);
        $s->bindValue(':myfname', $myfname);
        $s->bindValue(':mylname', $mylname);
        $s->bindValue(':myaddress', $myaddress);
        $s->bindValue(':mycity', $mycity);
        $s->bindValue(':mystate', $mystate);
        $s->bindValue(':myzipcode', $myzipcode);
        $s->bindValue(':myemail', $myemail);
        $s->bindValue(':mygroup', $mygroup);
        $s->bindValue(':subject', $subject);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted registration' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs

    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false

} else {

    include 'registration.html.php';

} //Modify this to include the initial file for this folder
?>