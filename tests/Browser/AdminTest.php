<?php

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminTest extends DuskTestCase
{
    public function testAuthenticated()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin')
                ->assertSee('Welcome');
        });
    }

    public function testAdminPokemonLink()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin')
                ->click('#linkpoke')
                ->waitForText('Floroue')
                ->assertSee('Floroue');
        });
    }

    public function testAdminAttackLink()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin')
                ->click('#linkattack')
                ->waitForText('Pound')
                ->assertSee('Pound');
        });
    }
}
