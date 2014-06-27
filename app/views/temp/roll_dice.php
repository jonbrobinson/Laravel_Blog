<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <p>Random Number Chosen : <?= $random ; ?></p>
    <p>Your Guess Is : <?= $guess ; ?></p>
    <? if ($guess == $random): ?>
    	<h2 style="color: green">You Guessed correctly</h2>
    <? else :?>
    	<h3 style="color: red"> Sorry Try Again</h3>
    <? endif; ?>
</body>
</html>