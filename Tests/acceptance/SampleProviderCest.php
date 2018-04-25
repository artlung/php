<?php

class SampleProviderCest
{
	/** @var \Helper\Acceptance */
	public $helper;

	public function _before(AcceptanceTester $I)
	{
	}

	public function _after(AcceptanceTester $I)
	{
	}

	protected function _inject(\Helper\Acceptance $helper)
	{
		$this->helper = $helper;
	}

	public function canViewMainPageS(AcceptanceTester $I)
	{
	    return true; // EKB-738


	}




}
