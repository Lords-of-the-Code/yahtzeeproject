<?php session_start();
include("inc/header.php"); 
    if(isset($_SESSION['failedLogin']) && $_SESSION['failedLogin']=="Y") { ?>
        <div id="dialog" title="Login Failure!">
        <p>Your login or password was incorrect, please try again</p>
        
        </div>
        
    <?php session_destroy(); }
    session_start();
?>

        <div id="login_signup">
            <div id="login">
                <form name="login" action="verifylogin.php" method="post">
                    <label>Log in here </label>
                    <br/>
                    <input type="text" name="username" onfocus="if(this.value === 'username') { this.value = ''; }" value="username"/> <br/>
                    <input type="password" name="password" value="password" onfocus="if(this.value === 'password') { this.value = ''; }"/> <br/>
                    <input type='hidden' name='attempt' value='Y'/>
                        <?php $_SESSION['attempt']="Y"; ?>
                    <input type="submit" value="Submit" class="submitbutton"/>
                </form>
                <a href="forgot.php" >Forgot login details?</a>
            </div>
            <div id="signup">
                <p>Don't have an account yet? Sign up is free and easy!</p>
                <form action="signup.php">
                    <input type="submit" value="Create a new account" class="submitbutton">
                </form>
            </div>

            <img src="images/yahtzee_homepagepic.jpg" alt="yahtzee"/>
        </div>

    <?php include("inc/footer.php"); ?>
<script type="text/javascript" src="js/functions.js"></script>