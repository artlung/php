<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->wantTo('Fill username form on home page');
$I->amOnPage('/');
$I->see('Username');
$I->fillField('username', 'Griswold');
$I->canSeeElement('#goButton');
$I->click('#goButton');

