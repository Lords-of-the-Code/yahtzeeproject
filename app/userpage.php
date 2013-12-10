<?php 
include("inc/header.php"); 
if(isset($_SESSION['firstLogin']) && $_SESSION['firstLogin']=="Y"){ 
    $username=$_SESSION['username'];?>
<p>Congratulations, <?=$username;?>, your sign up was successful!</p>
<?php 
$_SESSION['firstLogin']="";
}
?>

<div id="summarynav">
   
      <h1>Welcome <?= $_SESSION['username']; ?></h1>
      <p>Choose what you'd like to do from the options below!</p>
      <ul>
        <li><a href="gamepage.php">Start a new game</a></li>
        <li><a href="userstats.php">See your stats</a></li>
        <li><a href="userfriends.php">See your friends' scores</a></li>
      </ul>    
  
    </div>
        <?php include("inc/footer.php"); ?>
