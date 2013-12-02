<?php include("inc/header.php"); 

$db = new PDO("mysql:dbname=yahtzeeproject;host=localhost","admin","admin");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['insert'])) {
    print("yes i'm set");
        $first_name=$_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $securityq = $_POST['security_question'];
        $secqanswer = $_POST['answer'];
     
        $insert_user=$db->prepare('INSERT INTO users (first_name, last_name, username, password, dob, email, securityq, secqanswer) 
                VALUES (:first_name, :last_name, :username, :password, :dob, :email, :securityq, :secqanswer)');
        $insert_user->execute(array(':first_name' =>$first_name, ':last_name'=>$last_name, ':username'=>$username, ':password'=>$password, ':dob'=>$dob, ':email'=>$email,
                ':securityq'=>$securityq, ':secqanswer'=>$secqanswer));
        }
       
?>

        <div id="signingup">
        <form method="POST" action="signup.php">
            <!--<h1>This is the form</h1>-->
            <?php $_POST['insert'] ?>
            <fieldset>
                <legend> Yahtzee Sign-Up</legend>
                <label> First Name  </label><input type="text" name="first_name"/>  <br/>
                <label> Last Name</label><input type="text" name="last_name"/>  <br/>
                <label> Username </label><input type="text" name="username" /> <br/>
                <label> Password</label><input type="password" name="password"/><br/>
                <!--<label> Date of Birth</label><input type ="date"/><br/>-->
                <input type="text" name="date" value="yyyy-mm-dd" />
                <!--Calendar info on p221-->
                <label> Email</label><input type="text" name="email"/> <br/>        
                <label>Choose a Security Question</label><br/>
                <select name="security_question">
                    <option value="first_school">What was the name of your first school?</option>
                    <option value="pet_name">What was the name of your first pet?</option>
                    <option value="car_model">What was the model of your first car?</option>
                    <option value="maiden_name">What is your mother's maiden name?</option>
                </select>
                <br/>
                <br/>
                <label>Answer</label><input type="text" name="answer" /> <br/>
                <p id="signupsubmit"><input type="submit" value="Sign Up!" /></p>
                <input type="hidden" name="insert" value="insert" />
            </fieldset>
        </form>
        </div>

<?php
    
    ?>
        <?php include("inc/footer.php"); ?>
    </body>
</html>