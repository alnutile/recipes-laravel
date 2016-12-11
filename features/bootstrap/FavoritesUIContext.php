<?php

use App\User;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FavoritesUIContext extends MinkContext implements Context, SnippetAcceptingContext
{
    use \Laracasts\Behat\Context\Migrator, LoginTrait;


    private $baseUrl;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->baseUrl = env('APP_URL');
    }

    /**
     * @Given I have an account
     */
    public function iHaveAnAccount()
    {
        $this->user = User::first();
        $this->visit("/");
        $this->assertPageNotContainsText("Profile");
        $this->login();
        sleep(3);
        $this->assertPageContainsText("Profile");
    }

    /**
     * @Then I can choose comics to add as favorites
     */
    public function iCanChooseComicsToAddAsFavorites()
    {
        //go to search page
        //click favorite
        throw new PendingException();
    }
}
