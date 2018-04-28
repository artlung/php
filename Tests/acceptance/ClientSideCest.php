<?php


class ClientSideCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function loadMainPage(AcceptanceTester $I)
    {
      $I->amOnPage('/');
    }
    public function paragraphIsInvisible(AcceptanceTester $I)
    {
      $I->amOnPage('/ ');
      $I->dontSeeElement('.paragraph');
    }
    public function paragraphIsVisibleAfterButtonClick(AcceptanceTester $I)
    {
      $I->amOnPage('/');
      $I->click('#toggle-p');
      $I->wait(1);
      $I->seeElement('.paragraph');
    }
    public function paragraphIsInvisibleAfterTwoClicks(AcceptanceTester $I)
    {
      $I->amOnPage('/');
      $I->dontSeeElement('.paragraph');
      $I->click('#toggle-p');
      $I->wait(1);
      $I->seeElement('.paragraph');
      $I->click('#toggle-p');
      $I->wait(1);
      $I->dontSeeElement('.paragraph');
    }
}
