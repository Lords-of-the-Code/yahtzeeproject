<?php session_start();
include("inc/header.php"); 
require("inc/dbconnect.php");
        
//print $_POST['loggedIn'];
        if( isset($_POST['attempt']) && ($_POST['attempt'] == "Y") ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $attempt = $_POST['attempt'];
//        print_r($username);
//        print_r($password);
        
    } 
    $user_query=("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
    $rows = $db->query($user_query);
    
    if(isset($rows)){
        foreach($rows as $row){
            $_SESSION['username']=$username;
            $_SESSION['loggedIn']="Y";
            header("Location: userpage.php");//send user to userpage
            exit;
        }
    }
//    session_start();
      $_SESSION['loggedIn']="N";
      $_SESSION['failedLogin']="Y";
       header("Location: index.php");
include("inc/footer.php"); ?>