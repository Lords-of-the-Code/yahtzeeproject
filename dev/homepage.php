<!DOCTYPE html>
<!--Home page-->
<html>
    <head>
        <title>Yahtzee Online</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/homepage.css" type="text/css" rel="stylesheet" />
    </head>
    <body id="homepagebody">
        <header>
            <a href="homepage.php" ><img src="images/yahtzee4.png" alt="Yahtzee Online"/></a>
            Brought to you by your friendly villagehood <br/>Lords of the Code
        </header>
        <div id="login_signup">
            <div id="login">
                <form name="login" action="userpage.php" method="post">
                    <label>Log in here <br/><input type="text" name="q" value="Username"/></label> <br/>
                    <input type="password" value="password" /> <br/>
                    <input type="submit" value="Submit" />
                </form>
                <a href="forgot.php" >Forgot login details?</a>
            </div>
            <div id="signup">
                <p>Don't have an account yet? Sign up is free and easy!</p>
                <form action="signup.php">
                    <input type="submit" value="Create a new account">
                </form>
            </div>

            <img src="images/yahtzee_homepagepic.jpg" alt="yahtzee"/>
        </div>
        
         <footer>
            <p> The original YAHTZEE&trade; game is a trademark of Hasbro, Inc.<br />
            Credit goes to <a class="footer" href="http://www.YahtzeeScoresheet.com"> YahtzeeScoresheet.com</a> This is a free service to provide an playing experience that is enjoyable.<br />
            The dice aren't included. For concerns or questions please feel free to <a class="footer" href="http://yahtzeescoresheet.blogspot.com">BLOG HERE.</a><br />
            <form method="get" action="http://www.google.com/custom" target="google_window">
            <a href="http://www.google.com/">  </a>   
            <img src="images/google.gif" alt="Google">
            <label for="sbi" style="display: none">Enter your search terms</label>
            <input type="text" name="q" size="31" maxlength="255" value="" id="sbi">
            <label for="sbb" style="display: none">Submit search form</label>
            <input type="submit" name="sa" value="Search" id="sbb">
<!--            <input type="hidden" name="client" value="pub-2083499070704295">
            <input type="hidden" name="forid" value="1">
            <input type="hidden" name="channel" value="6530270764">
            <input type="hidden" name="ie" value="ISO-8859-1">
            <input type="hidden" name="oe" value="ISO-8859-1">
            <input type="hidden" name="cof" value="GALT:#3D81EE;GL:1;DIV:#c3040c;VLC:32527A;AH:center;BGC:FFFFFF;LBGC:ffffff;ALC:c3040c;LC:c3040c;T:000000;GFNT:CCCCCC;GIMP:CCCCCC;LH:50;LW:180;L: http://www.yahtzeescoresheet.com/images/YahtzeeScoreSheetlogo.gif;S:http://www.yahtzeescoresheet.com;FORID:1 ">
            <input type="hidden" name="hl" value="en">   -->
            <p>&copy; 2013 Lords of the Code</p>
            </form>
            </footer>
        <!--</div>-->
    </body> 
</html>