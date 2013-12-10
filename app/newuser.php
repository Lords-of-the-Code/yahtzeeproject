<?php
include('inc/header.php');
include('inc/dbconnect.php');
//$num_before = dbase_numrecords($db);
//$username=$_POST['username'];
if(isset($_POST['insert'])) {
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
//$num_after = dbase_numrecords($db);

$search_new_user=$db->query('SELECT * FROM users WHERE username="$username"');
foreach($search_new_user as $row){
    $username=$_SESSION[$row['username']];
}

if ($search_new_user) { 
    
        $_SESSION['username']=$username;
        $_SESSION['loggedIn']="Y";
        $_SESSION['firstLogin']="Y";
        header("Location:userpage.php"); 

}
else { header("Location:signup.php");
 } 
include('inc/footer.php');?>