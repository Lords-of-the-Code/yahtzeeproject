<?php include("inc/header.php"); 
include("inc/dbconnect.php");
        
//print $_POST['loggedIn'];
        if( isset($_POST['loggedIn']) && ($_POST['loggedIn'] == "Y") ) {
        $username = $_POST['username'];

        $password = $_POST['password'];
        $logged_in = $_POST['loggedIn'];
        
        
    } else {
        $message = "I'm sorry, you are not logged in. Please try again. <a href='homepage.php'>Back</a>";
    }
    
    $user_query=("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
    $rows = $db->query($user_query);
//    print $_POST['username'];
//    print_r($rows);
    if(!empty($rows)){
        foreach($rows as $row){
        ?>
            <p>It worked, <?= $row['first_name']; ?> </p> 
                <a href = "userpage.php">Click to go to your page </a>
                <?php //send user to userpage
            
        }}
        else { ?>
            <p>Your username or password was incorrect, try again</p>
        <?php }
    ?>
    <?php include("inc/footer.php"); ?>


    </body>
</html>