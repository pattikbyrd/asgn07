<?php


class Cube extends Rectangle 
  
{
  private $z;


    public function getZ()
	{
		return $this->z;
	}
	
	public function setZ($Z)	
	{
		$this->z = $Z;
	}
	
	public function getArea()
	{	
		$this->getArea = ((2 * $this->x) * ($this->y + 2)) * (($this->x * $this->z + 2) * ($this->y * $this->z));
      
        return $this->getArea;
	}
  
    public function getVolume()
    {
      $this->getVolume = ($this->x * $this->y) * $this->z;
      
      return $this->getVolume;
    }
	
} 
?>