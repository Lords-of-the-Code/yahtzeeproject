<?php
include('inc/header.php');
include('inc/dbconnect.php');
//$num_before = dbase_numrecords($db);
//$username=$_POST['username'];
if(isset($_POST['insert'])) {
    print("yes i'm set");
        $first_name=$_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $securityq = $_POST['security_question'];
        $secqanswer = $_POST['answer'];
     
        $insert_user=$db->prepare('INSERT INTO users (first_name, last_name, username, password, dob, email, securityq, secqanswer) 
                VALUES (:first_name, :last_name, :username, :password, :dob, :email, :securityq, :secqanswer)');
        $insert_user->execute(array(':first_name' =>$first_name, ':last_name'=>$last_name, ':username'=>$username, ':password'=>$password, ':dob'=>$dob, ':email'=>$email,
                ':securityq'=>$securityq, ':secqanswer'=>$secqanswer));
        }
        else { ?>
    <p>Something wasn't right, click <a href='homepage.php'>here</a> to try again</p>
<?php } 
//$num_after = dbase_numrecords($db);

$search_new_user=$db->query('SELECT id FROM users WHERE username="$username"');

if ($search_new_user) { ?>
    <p>Congratulations, <?= $first_name ?>, your sign up was successful! Click 
        <a href='homepage.php'>here</a> to sign in and start playing Yahtzee Online!</p>
    <?php
}
else { ?>
    <p>Something wasn't right, click <a href='signup.php'>here</a> to try again</p>
<?php } 
include('inc/footer.php');?>