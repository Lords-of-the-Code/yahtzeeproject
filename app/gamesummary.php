<?php include('inc/header.php');
require('inc/dbconnect.php');
    $username=$_SESSION['username'];
    $one=$_POST['one'];
    $two=$_POST['two'];
    $three=$_POST['three'];
    $four=$_POST['four'];
    $five=$_POST['five'];
    $six=$_POST['six'];
    $upper=$_POST['upper'];
    $bonus=$_POST['bonus'];
    $uppertot=$_POST['uppertot'];
    $throfkind=$_POST['throfkind'];
    $frofkind=$_POST['frofkind'];
    $fullhouse=$_POST['fullhouse'];
    $smstraight=$_POST['smstraight'];
    $lgstraight=$_POST['lgstraight'];
    $yahtz=$_POST['yahtz'];
    $chance=$_POST['chance'];
    $yahtzbonus=$_POST['yahtzbonus'];
    $lowertot=$_POST['lowertot'];
    $grandtot=$_POST['grandtot'];
    
    try{
    
    $insert_scores=$db->prepare('INSERT INTO usergames (username, one, two, 
        three, four, five, six, upper, bonus, uppertot, throfkind, frofkind, 
        fullhouse, smstraight, lgstraight, yahtz, chance, yahtzbonus, lowertot, grandtot) 
        VALUES (:username, :one, :two, :three, :four, :five, :six, :upper, :bonus, :uppertot,
        :throfkind, :frofkind, :fullhouse, :smstraight, :lgstraight, :yahtz, :chance, 
        :yahtzbonus, :lowertot, :grandtot');
    $insert_scores->execute(array(':username'=>$username, ':one'=>$one, ':two'=>$two, ':three'=>$three, 
        ':four'=>$four, ':five'=>$five, ':six'=>$six, ':upper'=>$upper, ':bonus'=>$bonus, ':uppertot'=>$uppertot,
        ':throfkind'=>$throfkind, ':frofkind'=>$frofkind, ':fullhouse'=>$fullhouse, ':smstraight'=>$smstraight, 
        ':lgstraight'=>$lgstraight, ':yahtz'=>$yahtz, ':chance'=>$chance, 
        ':yahtzbonus'=>$yahtzbonus, ':lowertot'=>$lowertot, ':grandtot'=>$grandtot));
    
    }
    
    catch(PDOException $ex) { ?>
        <p> Sorry, a database error occurred. Please try again later.</p>
        <p>(Error Details: <?= $ex->getMessage() ?>)</p>
    <?php }
?>

<p>Your grand total was <?= $grandtot ?>, See other scores below: 
    ones= <?= $one; ?>  twos= <?=$two; ?> threes = <?=$three; ?>  fours = <?=$four; ?>  
    fives=<?=$five; ?> sixes=<?=$six; ?> <br/>upper before bonus=<?=$upper; ?> bonus=<?= $bonus; ?> 
    upper section total after bonus=<?=$uppertot; ?> <br/>
    three of a kind=<?=$throfkind; ?> four of a kind = <?=$frofkind; ?> fullhouse= <?=$fullhouse;?>
     small straight=<?=$smstraight;?> large straight= <?=$lgstraight;?>
     yahtzee=<?=$yahtz;?> chance=<?=$chance; ?> yahtzee bonus=<?=$yahtzbonus?>
     <br/>lower section total= <?= $lowertot; ?> <br/>
    grand total= <?= $grandtot; ?>
</p>
<div id="summarynav">
      
      <p> Now you've finished your game, try these links!</p>
      <ul>
        <li><a href="gamepage.php">New game</a></li>
        <li><a href="userstats.php">My Stats</a></li>
        <li><a href="userfriends.php">My Friends</a></li>
      </ul>    
  
    </div>
    <?php include('inc/footer.php'); ?>