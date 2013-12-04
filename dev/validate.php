<?php 
include("inc/header.php"); 
include("inc/dbconnect.php");
$email = $_P0ST['email'];


$to =$email;
$subject="your credentials";
$message="simple email"; 
$from="yahtzeelotc";
$header= "From:" .$from;
$mail($to,$subject,$message,$header);
echo "Mail Sent.";

$emailquery = ("SELECT * FROM users WHERE email = '".$email."'");
$rows = $db->query($emailquery);

foreach($rows as $row){
    ?>

<p> We found you, <?= $row['first_name']; ?>, Please answer the security question:
    <br/>
    <?= $row['securityq'];?>
<form action="validate.php" method="POST">
    <input type="text" name="answer" value=""/>
    
    
</form> 
</p>
<?php 

if()

include("inc/footer.php"); ?>
    </body>
</html>
