<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
	protected $revenue;

	public function __construct($revenue)
	{
		$this->revenue = $revenue;
	}
	
    public function inDollars()
    {
    	return $this->revenue / 100;
    }

    public function asCurrency()
    {
    	return money_format('$%i', $this->inDollars());
    }

    public function __toString()
    {
    	return (string) $this->revenue;
    }
}
