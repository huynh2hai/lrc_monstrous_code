<?php

namespace App;

class Statistics
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function favorites()
	{
		return 123;
	}

	public function completions()
	{
		return 4321;
	}

	public function experience()
	{
		return 11100000;
	}


}