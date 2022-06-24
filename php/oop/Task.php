<?php 

class Task
{
	private String $name;
	private bool $isComplete;

	public function __construct()
	{
		$this->isComplete = false;

	}

	public function setName($name):void
	{
		$this->name = $name; 
	}

	public function getName():String
	{

		return $this->name;
	}

	public function markAsComplete()
	{
		$this->isComplete = true;
	}

}

