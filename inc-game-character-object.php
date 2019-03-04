<?php
class GameCharacter
{
	private $playerName;
	private $score;
  
  
  
    public function __gameCharacter ($playerName, $score)
    {
      $this->playerName = $playerName;
      $this->score = $score;
    }

	public function getPlayerName()
	{
		return $this->playerName;
	}
  
    public function setPlayerName($playerName)	
 	{
		$this->playerName = $playerName;
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function setScore($score)
	{
		$this->score = $score;
	}
}

?>
	