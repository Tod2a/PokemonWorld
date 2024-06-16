<?php

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontAttackTest extends DuskTestCase
{
    public function testPageLoads()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->assertSee('Bite');
        });
    }

    public function testShowNextTwo()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->click('#fetchnext')
                ->waitForText('Page 2')
                ->assertSee('Page 2');
        });
    }

    public function testShowPreviousPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->click('#fetchnext')
                ->waitForText('Page 2')
                ->click('#fetchprev')
                ->waitForText('Page 1')
                ->assertSee('Page 1');
        });
    }

    public function testSearchByNameWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->type('#namesearch', 'sol')
                ->pause(2000)
                ->assertSee('Solar Beam')
                ->assertDontSee('Bite');
        });
    }

    public function testSearchByTypeWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->select('#typesearch', 'Grass')
                ->pause(2000)
                ->assertSee('Solar Beam')
                ->assertDontSee('Bite');
        });
    }

    public function testSearchByNameAndTypeWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/attack')
                ->waitForText('Bite')
                ->type('#namesearch', 'sol')
                ->select('#typesearch', 'Grass')
                ->pause(2000)
                ->assertSee('Solar Beam')
                ->assertDontSee('Razor Leaf');
        });
    }
}
