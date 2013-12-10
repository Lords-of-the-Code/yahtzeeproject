<?php 
include('inc/header.php');
    $_SESSION['loggedIn']="N";
header("Refresh: 5; index.php");
    ?>
<p>Thanks for playing, log in again soon! <br/>
You should be redirected to the homepage in 5 seconds,<br/>
If not, click <a href="index.php">here</a>
</p>

<?php
include('inc/footer.php');
?>