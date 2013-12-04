
<!DOCTYPE html>
<html>
    <?php include("inc/header.php"); ?>
    <div id="gamepage">
      
      <p> Done with your game? Then try these links!</p>
      <ul>
        <li><a href="gamepage.php">New game</a></li>
        <li><a href="userstats.php">My Stats</a></li>
        <li><a href="userfriends.php">My Friends</a></li>
      </ul>    
  
    </div>  
        <!-- Javascript Dice -->
    <div id="javadice">
        <p>Don't have 5 dice?  Use these (Click on Dice to keep them each roll):</p>
        <form name="dice">
        <input type="hidden" id="dice1h" value="" />
        <input type="hidden" id="dice1val" value="" />
        <input type="hidden" id="dice2h" value="" />
        <input type="hidden" id="dice2val" value="" />
        <input type="hidden" id="dice3h" value="" />
        <input type="hidden" id="dice3val" value="" />
        <input type="hidden" id="dice4h" value="" />
        <input type="hidden" id="dice4val" value="" />
        <input type="hidden" id="dice5h" value="" />
        <input type="hidden" id="dice5val" value="" />

    <table> 
     <tbody>
       <tr> 
	<th colspan="4">Total of Dice:
        <td id="dicetotal"></td>
       </tr>
            
    <tr>
        <td id="dice1"></td>
     
        <td id="dice2"></td>
       
        <td id="dice3"></td>
        
        <td id="dice4"></td> 
       
        <td id="dice5"></td>
        
    </tr>
    </tbody>

    </table>
        <input type="button" onclick="rollDice();" name="Roll" value="Roll"/>
        <input type="button" onclick="resetDice();" name="Reset" value="Reset" />
        
        <div id="rolltotal"></div>
    
    </form>
    </div>
 <!-- End Javascript Dice -->
 <script src="js/game.js"></script>
         <?php include("inc/footer.php"); ?>

    </body>
</html>
