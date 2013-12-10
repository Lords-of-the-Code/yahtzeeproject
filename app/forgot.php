<?php include("inc/header.php"); 
    require('inc/dbconnect.php');?>
        
        <div id="signingup">
            <p>Forgot your password? That's okay, enter your email:</p>
            <form method="post" action="validateforgot.php">
<!--                <label> username </label> <input type="text" name="Username" />
                code for if forgot username, spits out security q
                <p> Forgot username? </p>
                <br/>-->
                <label>e-mail</label><input type="text" name="Email" />
                <input type="submit" value="submit"/>
            </form>
        </div>
        <?php include("inc/footer.php"); ?>