<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageTest extends DuskTestCase
{
    public function testHomePageLoadsSuccessfully()
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
