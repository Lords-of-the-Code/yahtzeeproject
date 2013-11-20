<?php include("inc/header.php"); ?>

        <div id="signingup">
        <form method="POST" action="homepage.php" >
            <fieldset>
                <legend><h3>Yahtzee Sign-Up</h3></legend>
            <label> First Name  </label><input type="text" name="FirstName"/>  <br/>
            <label> Last Name</label><input type="text" name="LastName"/>  <br/>
            <label> Username </label><input type="text" name="UserName" /> <br/>
            <label> Password</label><input type="password" name="Password"/><br/>
            <label> Date of Birth</label><input type ="Date"/><br/>
            <!--Calendar info on p221-->
            <label> Email</label><input type="text" name="Email"/> <br/>        
            <label>Choose a Security Question</label><br/>
            <select name="security_question">
            <option value="first_school">What was the name of your first school?</option>
            <option value="pet_name">What was the name of your first pet?</option>
            <option value="car_model">What was the model of your first car?</option>
            <option value="maiden_name">What is your mother's maiden name?</option>
            </select>
            <br/>
            <br/>
            <label>Answer</label><input type="text" name="Answer" /> <br/>
            <p id="signupsubmit"><input type="submit" value="Sign Up!" /></p>
            </fieldset>
        </form>
        </div>
        <?php include("inc/footer.php"); ?>
    </body>
</html>