<?php include("inc/header.php"); ?>
        <div id="login_signup">
            <div id="login">
                <form name="login" action="verify.php" method="post">
                    <label>Log in here <br/><input type="text" name="q" value="Username"/></label> <br/>
                    <input type="password" value="password" /> <br/>
                    <input type="submit" value="Submit" />
                </form>
                <a href="forgot.php" >Forgot login details?</a>
            </div>
            <div id="signup">
                <p>Don't have an account yet? Sign up is free and easy!</p>
                <form action="signup.php">
                    <input type="submit" value="Create a new account">
                </form>
            </div>

            <img src="images/yahtzee_homepagepic.jpg" alt="yahtzee"/>
        </div>
        <?php include("inc/footer.php"); ?>
    </body> 
</html>