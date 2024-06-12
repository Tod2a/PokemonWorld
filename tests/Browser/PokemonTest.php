<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PokemonTest extends DuskTestCase
{

    public function testHomePageLoadsSuccessfully()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pokemon/1')
                ->screenshot('testHomepage2')
                ->assertSee('Pokedex');
        });
    }

    public function testAuthenticated()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin')
                ->assertSee('Welcome');
        });
    }
}
