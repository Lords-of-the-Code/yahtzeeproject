    <?php 

    include("inc/header.php"); 
     ?>
      
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

    <table id="dicediv"> 
     <tbody>
       <tr> 
	<th colspan="4">Total of Dice:</th>
        <!--<td id="dicetotal"></td>-->
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
 
 <?php 
// include('inc/scoresheet.php'); 
        include('inc/scoresheet.php');
 ?>
 <div id="rulebooklink">
     <p> <a href ="http://www.hasbro.com/common/instruct/Yahtzee.pdf">Need to see some rules?</a></p>
 </div>
 
 
 <script src="js/game.js"></script>
 
         <?php 
         include("inc/footer.php"); ?>