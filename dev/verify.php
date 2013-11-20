<?php include("inc/header.php"); ?>
        <?php
        if( isset($_POST['loggedIn']) && ($_POST['loggedIn'] == "Y") ) {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $logged_in = $_POST['loggedIn'];
    } else {
        $message = "I'm sorry, you are not logged in. Please try again. <a href='warm-up-3.php'>Back</a>";
    }
    ?>
    <?php include("inc/footer.php"); ?>
    </body>
</html>