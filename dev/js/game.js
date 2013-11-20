var totalGames;
var rollCount = 0;
        
function setNumGames(number){
	totalGames = number;
}
        
function rollDice() {
	var total = 0;
	var dicetotal = document.getElementById('dicetotal');
	var rolltotal = document.getElementById('rolltotal');
	rolltotal.innerHTML = "Num Rolls: " + (++rollCount);

	var i = 1;
	for (i; i<6; i++){
		//alert('i: ' + i);
		var dice = document.getElementById('dice' + i);
		var diceval = document.getElementById('dice' + i + 'val');
		var dicesave = document.getElementById('dice' + i + 'h');
		
		if (dicesave.value !== 'save') {
			var num = randomNumber();
			dice.innerHTML = getDiceImage(num, '', 'dice' + i);
			diceval.value = num;
		}
		total = total + parseInt(diceval.value)*1;
	}
	dicetotal.innerHTML = total;
}

function resetDice() {
	
	//make sure we're not saving any of the dice values
	document.getElementById('dice1h').value = '';
	document.getElementById('dice2h').value = '';
	document.getElementById('dice3h').value = '';
	document.getElementById('dice4h').value = '';
	document.getElementById('dice5h').value = '';
	
	rollCount = 0;
	rollDice();
}

function toggleSave(dice) {
	var save = document.getElementById(dice + 'h');
	var diceval = document.getElementById(dice + 'val').value;
	var diceImg = document.getElementById(dice);
	
	if (save.value == 'save') {
		save.value = '';
		diceImg.innerHTML = getDiceImage(diceval, '', dice);
	} else {
		save.value = 'save';
		diceImg.innerHTML = getDiceImage(diceval, 'RED', dice);
	}
}

function getDiceImage(num, color, dice) {
	
	if (num = 1){
		return "<img src='images/Ace.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num = 2) {
		return "<img src='images/Two.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num = 3) {
		return "<img src='images/Three.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num = 4) {
		return "<img src='images/Four.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num = 5) {
		return "<img src='images/Five.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num = 6) {
		return "<img src='images/Six.gif" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	}
}

function randomNumber() {
	var ran_unrounded = Math.random()*6;
	var ran_number = Math.floor(ran_unrounded)+1;
	return ran_number;
}
