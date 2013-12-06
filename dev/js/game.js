// yahtzeeSS.js

var totalGames;

function setNumGames(number){
	totalGames = number;
}

// newFunction
function validateScore(number, score, input, playeri, gamei) {
	if (score > number * 5){
		alert('Score Must be Less Than ' + number*5);
		input.value = '';
		input.focus();
	} else if ((score % number) != 0) {
		alert('Score Must be a Multiple of ' + number);
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function getUpperScore(playeri, gamei){
	var acesScore = document.getElementById('aces'+playeri+gamei).value;
	var twosScore = document.getElementById('twos'+playeri+gamei).value;
	var threesScore = document.getElementById('threes'+playeri+gamei).value;
	var foursScore = document.getElementById('fours'+playeri+gamei).value;
	var fivesScore = document.getElementById('fives'+playeri+gamei).value;
	var sixesScore = document.getElementById('sixes'+playeri+gamei).value;
	
	return parseInt(acesScore*1+twosScore*1+threesScore*1+foursScore*1+fivesScore*1+sixesScore*1);
}

function getUpperScoreAndBonus(playeri, gamei){
	var totalScoreDiv = document.getElementById('totalscore'+playeri+gamei);
	var score = getUpperScore(playeri, gamei);
	totalScoreDiv.innerHTML = score;
		
	var totalDiv = document.getElementById('total'+playeri+gamei);
	var bonusDiv = document.getElementById('bonus'+playeri+gamei);
	var totalUpperDiv = document.getElementById('totalupper'+playeri+gamei);
	
	var totalScore;
	if (score >= 63) {
		bonusDiv.innerHTML = 'BONUS';
		totalScore = parseInt(score+35);
		totalDiv.innerHTML = totalScore;
	} else {
		bonusDiv.innerHTML = '';
		totalDiv.innerHTML = score;
		totalScore = score;
	}
	totalUpperDiv.innerHTML = totalScore;
	return totalScore;
}

function validate3kind(score, input, playeri, gamei){
	if (score > 30){
		alert('Invalid 3 of a kind score ');
		input.value = '';
		document.getElementById('threekind'+playeri+gamei).focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validate4kind(score, input, playeri, gamei){
	if (score > 30){
		alert('Invalid 4 of a kind score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validateFullhouse(score, input, playeri, gamei){
	if (score > 28){
		alert('Invalid Full House score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validateSmstraight(score, input, playeri, gamei){
	if (score != 30 && score != 0){
		alert('Invalid Small Straight score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validateLgstraight(score, input, playeri, gamei){
	if (score != 40 && score != 0){
		alert('Invalid Large Straight score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validateChance(score, input, playeri, gamei){
	if (score > 30){
		alert('Invalid Chance score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function validateYahtzee(score, input, playeri, gamei){
	var yahtzeeBonusDiv = document.getElementById('yahtzeeBonus'+playeri+gamei);
	//make sure there is no bonus
	yahtzeeBonusDiv.value = '0';
	
	if (score != 50 && score != 0){
		alert('Invalid Yahtzee score ');
		input.value = '';
		input.focus();
	} else {
		getGrandTotal(playeri, gamei)
	}
}

function addYahtzeeBonus(playeri, gamei){
	var yahtzeeBonusDiv = document.getElementById('yahtzeeBonus'+playeri+gamei);
	
	//check to see if 50 yahtzee is done yet
	var yahtzeeScore = document.getElementById('yahtzee'+playeri+gamei).value;
	if (yahtzeeScore != undefined && yahtzeeScore == 50){
		//we're good to go add 100 points
		bonusCurrVal = yahtzeeBonusDiv.value;
		if (bonusCurrVal != undefined && bonusCurrVal != ''){
			yahtzeeBonusDiv.value = bonusCurrVal*1 + 100;
		} else {
			yahtzeeBonusDiv.value = '100';
		}
		getGrandTotal(playeri, gamei);
	} else {
		alert('You must first enter the 50 point Yahtzee Score before getting the Yahtzee Bonus.');
	}
}

function removeYahtzeeBonus(playeri, gamei){
	var yahtzeeBonusDiv = document.getElementById('yahtzeeBonus'+playeri+gamei);
	
	//we're good to go remove 100 points
	bonusCurrVal = yahtzeeBonusDiv.value;
	if (bonusCurrVal != undefined && bonusCurrVal != '' && bonusCurrVal != 0){
		yahtzeeBonusDiv.value = bonusCurrVal*1 - 100;
	} else if (bonusCurrVal == undefined || bonusCurrVal == 0){
		alert('Are you crazy?!? You can not have a negative yahtzee bonus. ');
	} else {
		yahtzeeBonusDiv.value = '0';
	}
	getGrandTotal(playeri, gamei);
}

function getLowerScore(playeri, gamei){
	var ThreekindScore = document.getElementById('threekind'+playeri+gamei).value;
	var FourkindScore = document.getElementById('fourkind'+playeri+gamei).value;
	var fullhouseScore = document.getElementById('fullhouse'+playeri+gamei).value;
	var smstraightScore = document.getElementById('smstraight'+playeri+gamei).value;
	var lgstraightScore = document.getElementById('lgstraight'+playeri+gamei).value;
	var yahtzeeScore = document.getElementById('yahtzee'+playeri+gamei).value;
	var chanceScore = document.getElementById('chance'+playeri+gamei).value;
	var yahtzeeBonusScore = document.getElementById('yahtzeeBonus'+playeri+gamei).value;
	
	var lowerScore = parseInt(ThreekindScore*1+FourkindScore*1+fullhouseScore*1+smstraightScore*1+lgstraightScore*1+yahtzeeScore*1+chanceScore*1+yahtzeeBonusScore*1);
	
	var lowerScoreDiv = document.getElementById('totallower'+playeri+gamei);
	lowerScoreDiv.innerHTML = lowerScore;
	
	return lowerScore;
} 

//function gets the total of both the upper and lower sections
function getGrandTotal(playeri, gamei){
	var grandtotalDiv = document.getElementById('grandtotal'+playeri+gamei);
	var upperScoreValue = getUpperScoreAndBonus(playeri, gamei);
	var lowerScoreValue = getLowerScore(playeri,gamei);

	var grandTotal = lowerScoreValue + upperScoreValue;
	grandtotalDiv.innerHTML = grandTotal;
	getPlayerScore(playeri);
	return grandTotal;
}

//function to get the running total for each player for all games
function getPlayerScore(playeri){
	var playerScoreDiv = document.getElementById('playerScore'+playeri);
	var score = 0;
	
	for (i=0; i<totalGames; i++){
		var thisScore = document.getElementById('grandtotal'+playeri+i).innerHTML;
		if (thisScore != undefined && thisScore != '') {
			score = score + parseInt(thisScore)*1;
		}
	}
	
	playerScoreDiv.innerHTML = "- " + score;
}

var rollCount = 0;

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
		
		if (dicesave.value != 'save') {
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
	
	if (num == 1){
		return "<img src='images/Ace" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num == 2) {
		return "<img src='images/Two" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num == 3) {
		return "<img src='images/Three" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num == 4) {
		return "<img src='images/Four" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num == 5) {
		return "<img src='images/Five" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	} else if (num == 6) {
		return "<img src='images/Six" + color + ".gif' onclick='toggleSave(\"" + dice + "\")' />";
	}
}

function randomNumber() {
	var ran_unrounded=Math.random()*6;
	var ran_number=Math.floor(ran_unrounded)+1;
	return ran_number;
}
