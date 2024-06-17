<?php

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminAttacksTest extends DuskTestCase
{
    public function testAuthenticatedLoadPage()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->waitForText('Pound')
                ->assertSee('Pound');
        });
    }
}
