<?php include("inc/header.php"); ?>
        <?php
        if( isset($_POST['loggedIn']) && ($_POST['loggedIn'] == "Y") ) {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $logged_in = $_POST['loggedIn'];
        
        
    } else {
        $message = "I'm sorry, you are not logged in. Please try again. <a href='homepage.php'>Back</a>";
    }
    ?>
    <?php include("inc/footer.php"); ?>

    $db = new PDO("mysql:dbname=yahtzeeproject;host=localhost","piet","test");
    $inserted = $db->query((INSERT INTO users (first_name, last_name, username, password, dob, email, securityq, secqanswer) 
            VALUES ('first_ name', 'last_name', 'username', 'password', 'date', 'email', 'security_question', 'answer'));

    </body>
</html>