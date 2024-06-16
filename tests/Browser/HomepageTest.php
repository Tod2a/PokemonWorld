<?php

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageTest extends DuskTestCase
{
    public function testHomepageLoadsSuccessfully()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Pokedex');
        });
    }

    public function testPokemonLoadsSuccessfully()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Floroue')
                ->assertSee('Floroue');
        });
    }

    public function testSearchByNameWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Floroue')
                ->type('#namesearch', 'cryo')
                ->pause(2000)
                ->assertSee('Cryostodon')
                ->assertDontSee('Floroue');
        });
    }

    public function testSearchByTypeWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Floroue')
                ->select('#typesearch', 'Ice')
                ->pause(2000)
                ->assertSee('Cryostodon')
                ->assertDontSee('Floroue');
        });
    }

    public function testSearchByNameAndTypeWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Floroue')
                ->type('#namesearch', 'f')
                ->select('#typesearch', 'Dark')
                ->pause(2000)
                ->assertSee('Folunarque')
                ->assertDontSee('Floroue');
        });
    }

    public function testDetailWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Floroue')
                ->click('#detail1')
                ->waitForText('About Floroue')
                ->assertSee('About Floroue');
        });
    }

    public function testEvoNavWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pokemon/1')
                ->click('#navevo')
                ->waitForText('About Folunarque')
                ->assertSee('About Folunarque');
        });
    }
}
