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

    public function testCreateAttack()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->waitForText('Pound')
                ->click('#linkcreate')
                ->waitForText('Name')
                ->type('#name', 'testattack')
                ->type('#power', 25)
                ->type('#accuracy', 50)
                ->type('#maxpp', 25)
                ->type('#description', 'test description')
                ->select('#category', 1)
                ->select('#type', 2)
                ->click('#sendprocess')
                ->waitForText('Saved.')
                ->click('#linkback')
                ->waitForText('Pound')
                ->type('#namesearch', 'testattack')
                ->waitForText('testattack')
                ->assertSee('testattack');
        });
    }
}
