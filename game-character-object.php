<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <?php

  include('inc-game-character-object.php');
  
  $char1 = new GameCharacter();
  
  $char1->setPlayerName("Pirate");
  $char1->setScore(25);
  
  
  $char2 = new GameCharacter();
  
  $char2->setPlayerName("Shark");
  $char2->setScore(50);

  
  print ("<p>The name of the first game character is ".$char1->getPlayerName()." and his score is ".$char1->getScore().". <br> The name of the second game character is ".$char2->getPlayerName()." and his score is ".$char2->getScore().".</p>")
  
  ?>
</body>
</html>