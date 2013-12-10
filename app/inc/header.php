<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_NOTICE); 
session_start();
if(!isset($_SESSION['loggedIn']) && (!isset($_SESSION['attempt'])) && basename($_SERVER['PHP_SELF'])!="index.php"){
    session_destroy();
    header("Location: index.php");
}
else if($_SESSION['loggedIn'=="Y"]  &&basename($_SERVER['PHP_SELF'])=="index.php"){
    header("Location: userpage.php");
}
?>
<html>
    <head>
        <title>Yahtzee Online</title>
        <link rel="icon" type="image/png" href="../images/yahtzeeicon.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/homepage.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>    

    </head>
    <body>
        <div id="contentcontainer">
        <header>
            <?php if($_SESSION['loggedIn']=="Y"){ ?>
            <a href="userpage.php" ><img src="images/yahtzee_title.jpg" alt="Jahtzee Online"/></a>
            <?php } else { ?>
            <a href="index.php" ><img src="images/yahtzee_title.jpg" alt="Jahtzee Online"/></a>
            <?php } ?>
            Brought to you by your friendly villagehood <br/>Lords of the Code
            <?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']=="Y"){
                ?> 
            
                <form action="loggedout.php">
                <input type="submit" name="submit" value="Logout" class="submitbutton"/></form>
                
            <?php }?>
        </header>