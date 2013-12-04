<?php include("inc/header.php"); ?>
        
        <div id="signingup">
            <p>Forgot your password? That's okay, enter your username and 
                e-mail and we will send you your password!</p>
            <form method="post" action="validate.php">
                <label> username </label> <input type="text" name="Username" />
                <!--code for if forgot username, spits out security q-->
                <p> Forgot username? </p>
                <br/>
                <label>e-mail</label><input type="text" name="Email" />
                <input type="submit" value="submit"/>
            </form>
        </div>
        <?php include("inc/footer.php"); ?>
    </body>
</html>