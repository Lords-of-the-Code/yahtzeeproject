<form action='gamesummary.php' method='post'>
<table id="scoresheet" border="1">
  <tr>
    <th>Upper Section</th>
    <th>How To Score</th>
    <th>Game1</th>
  </tr>
  <tr>
    <td>Aces</td>
    <td>Count and Add ONLY Aces</td>
    <td>
            <input id="one" type="text" name='one'/>
            <input type="button" onclick="testValue(1, 0,'one');" value="set"/>
    </td>
  </tr>
  <tr>
      <td>Twos</td>
      <td>Count and Add ONLY Twos</td>
      <td><input id="two" type="text" name='two'/>
          <input type="button" onclick="testValue(2,1,'two');" value="set"/>
      </td>
  </tr>
  <tr>
      <td>Threes</td>
      <td>Count and Add ONLY Threes</td>
      <td><input id="three" type="text" name='three'/>
            <input type="button" onclick="testValue(3,2,'three');" value="set"/>
           </td>
  </tr>
  <tr>
      <td>Fours</td>
      <td>Count and Add ONLY Fours</td>
      <td><input id="four" type="text" name='four'/>
            <input type="button" onclick="testValue(4,3,'four');" value="set"/>
    </td>
  </tr>
  <tr>
      <td>Fives</td>
      <td>Count and Add ONLY Fives</td>
      <td><input id="five" type="text" name='five'/>
            <input type="button" onclick="testValue(5, 4,'five');" value="set"/>
       </td>
  </tr>
  <tr>
      <td>Sixes</td>
      <td>Count and Add ONLY Sixes</td>
      <td><input id="six" type="text" name='six'/>
            <input type="button" onclick="testValue(6,5,'six');" value="set"/>
         </td>
  </tr>
  <tr>
      <td>TOTAL SCORE</td>
      <td><img src="images/rightarrow.jpg"></td>
      <td><input id="upper" type="text" disabled name='upper'/>
            <input type="button" onclick="calculateUpper();" value="Calculate top half"/>
          </td>
  </tr>
  <tr>
      <td>BONUS</td>
      <td>Score 35</td>
      <td>
            <input id='bonus' type='text' disabled name='bonus'/>
         </td>
  </tr>
  <tr>
      <td>TOTAL</td>
      <td><img src="images/rightarrow.jpg"></td>
      <td><input id='uppertot' type='text' disabled name='uppertot'/>

          </td>
  </tr>
  <tr>
      <td>LOWER SECTION</td>
  </tr>
  <tr>
      <td>3 of a kind</td>
      <td>Add Total of All Dice</td>
      <td><input id="throfkind" type="text" name='throfkind'/>
            <input type="button" onclick="testValue2(9,'throfkind');" value='set'/>
      </td>
  </tr>
   <tr>
      <td>4 of a kind</td>
      <td>Add Total of All Dice</td>
      <td><input id='frofkind' type="text" name="frofkind"/>
            <input type="button" onclick="testValue2(10,'frofkind');" value="set"/>
          </td>
  </tr>
   <tr>
      <td>Full House</td>
      <td>Score 25</td>
      <td><label>Check if made!</label><input id="checkone" type="checkbox"/>
          <input id='fullhouse' type="text" name="fullhouse" disabled/>
          <input id="fullhousetot" type="hidden" value="25"/>
          <input type="button" onclick="checkChecks(11,'checkone', 'fullhouse', 'fullhousetot');" value="set"/>
         </td>
  </tr>
   <tr>
      <td>Small Straight</td>
      <td>Score 30</td>
      <td><label>Check if made!</label><input id="checktwo" type="checkbox" />
            <input id='smstraight' type="text" name="smstraight" disabled />
            <input id="smstraighttot" type="hidden" value="30"/>
            <input type="button"  onclick="checkChecks(12,'checktwo', 'smstraight', 'smstraighttot');" value="set"/>
      </td>
  </tr>
   <tr>
      <td>Large Straight</td>
      <td>Score 40</td>
      <td>
          <label>Check if made!</label><input id="checkthree" type="checkbox" />
            <input id='lgstraight' type="text" name="lgstraight" disabled />
            <input id="lgstraighttot" type="hidden" value="40"/>
            <input type="button"  onclick="checkChecks(13,'checkthree', 'lgstraight', 'lgstraighttot');" value="set"/>
      </td>
  </tr>
   <tr>
      <td>Yahtzee</td>
      <td>Score 50</td>
      <td>
          <label>Check if made!</label><input id="checkfour" type="checkbox" />
            <input id='yahtz' type="text" name="yahtz" disabled />
            <input id="yahtztot" type="hidden" value="50"/>
            <input type="button"  onclick="checkChecks(14,'checkfour', 'yahtz', 'yahtztot');" value="set"/>

      </td>
  </tr>
   <tr>
      <td>Chance</td>
      <td>Add Total of All Dice</td>
      <td><input id="chance" type="text" name="chance"/>
            <input type="button" onclick="testValue2(15, 'chance');" value="set"/>
         </td>
  </tr>
   <tr>
      <td>Yahtzee Bonus</td>
      <td>Score 100</td>
      <td>
          <label>Check if made!</label><input id="checkfive" type="checkbox" />
          <input id="yahtzbonus" type="text" name="yahtzbonus" disabled />
          <input id="yahtzbonustot" type="hidden" value="100"/>
            <input type="button" onclick="checkChecks(16, 'checkfive', 'yahtzbonus', 'yahtzbonustot');" value="set"/>
      </td>
  </tr>
   <tr>
      <td>Lower Section Total</td>
      <td><img src="images/rightarrow.jpg"></td>
      <td>
          <input id="lowertot" type="text" name="lowertot" disabled />
          <input type="button" onclick="calculateLower();" value="Calculate lower half" />
      </td>
  </tr>
  <tr>
      <td>Upper Section Total</td>
      <td><img src="images/rightarrow.jpg"></td>
      <td><input id="lutot" type="text" name="lutot" disabled/></td>
  </tr>
  <tr>
      <td>GRAND TOTAL</td>
      <td><img src="images/rightarrow.jpg"></td>
      <td><input id="grandtot" type="text" name="grandtot" disabled /></td>
  </tr>
</table>
    <input id='enterscores' type="submit" name="submit" onclick="makeSure(), convertBack();" value="Save Game Scores!" class="submitbutton" />
</form>
<script src="js/scoresheet.js"></script>