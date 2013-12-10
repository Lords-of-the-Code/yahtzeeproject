/*storevariables.js
 * Created and edited by Piet Schaeffer
 * 12/7/13
 * stores and calculates values
 * for event-driven scoresheet
 */

var scores=new Array();
var idees=new Array();
var upperTot;
var setIndices=0;

while (setIndices<=18){
    scores[setIndices]=0;
    setIndices++;
}

//Upper Section Functions
function testValue(test, index, id){
    var value=document.getElementById(id).value;
    if((value%test===0) && (value<=(test*5))){
        addValue(value, index);
    }
    else {
        document.getElementById(id).value="Invalid, try again";
    }


    function addValue(value, index){
        scores[index]=value;
        idees[index]=id;
        document.getElementById(id).value="Added " + scores[index];
    }
}

function calculateUpper() {
    upperTot=0;
    var loc;
    var index;
    for(index=0; index<=5; index++){
        loc=parseInt(scores[index]);
        upperTot+=loc;
    }
    scores[6]=upperTot;
    idees[6]="upper";
    document.getElementById('upper').value="Total=" + upperTot;
    bonus(upperTot);
    
    function bonus(upperTot) {
        var bonus=0;
        if(upperTot>=63){
            document.getElementById('bonus').value="Score above 63, 35 bonus!";
            bonus=35;
        }
        else{
            document.getElementById('bonus').value="Score below 63, no bonus :(";
        }
        fuppertot=upperTot+bonus;
        document.getElementById('uppertot').value=(fuppertot);
        scores[7]=bonus;
        idees[7]="bonus";
        scores[8]=(fuppertot);
        idees[8]="uppertot";
        document.getElementById('lutot').value=(fuppertot);
    }
}


function testValue2(index, id){
    var value=document.getElementById(id).value;
    if(value<=30){
        addValue(index);
    }
    else {
        document.getElementById(id).value="Invalid, try again";
    }
    function addValue(index){
        scores[index]=value;
        idees[index]=id;
        document.getElementById(id).value="Added " + value;
    }
}

function checkChecks(index, id, txtid, totid) {
    var val=0;
    if(document.getElementById(id).checked){
        val=document.getElementById(totid).value;
       
        document.getElementById(txtid).value=val;
        scores[index]=val;
        idees[index]=id;
    }
    else{
        document.getElementById(txtid).value=val;
        scores[index]=val;
        idees[index]=id;
    }
}

function calculateLower() {
    var lowertot=0;
    var loc;
    for(var i=9; i<=16; i++){
        loc=parseInt(scores[i]);
        lowertot+=loc;
    }
    scores[17]=lowertot;
    idees[17]="lowertot";
    document.getElementById('lowertot').value=lowertot;
    var grandtot=(scores[8]+lowertot);
    scores[18]=grandtot;
    idees[18]="grandtot";
    document.getElementById('grandtot').value=grandtot;
}

function makeSure(){
    alert("Are you sure you are finished?");
}

function convertBack() {
   for(var i=0; i<=18; i++){
       document.getElementById(idees[i]).value=scores[i];
       alert(idees[i] + "=" + scores[i]);
   }
}