

<?php include("inc/header.php"); ?>


        
        <div id="signingup">
            <p>Forgot your password? That's okay, enter your username or your     
               e-mail and we will send you your password!</p>
            <form method="post" action="userpage.php">
                <br><label> Username : </label> <input type="text" name="Username" />              
                <br/> <!--code for if forgot username, spits out security q-->
                <label>E-mail :</label><input type="text" name="Email" />
                <p> Forgot username? Enter your email below. </p>
               
                <br> <label>E-mail :</label><input type="text" name="Email" />
                <input type="submit" value="submit"/><br/>
            </form>
        </div>
        <?php include("inc/footer.php"); ?>
    </body>
</html>
