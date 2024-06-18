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

    public function testSearchByName()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->type('#namesearch', 'Fire Blast')
                ->waitForText('Fire Blast')
                ->assertSee('Fire Blast')
                ->assertDontSee('Bite');
        });
    }

    public function testSearchByType()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->select('#typesearch', 'Grass')
                ->waitForText('Solar Beam')
                ->assertSee('Solar Beam');
        });
    }

    public function testNavigation()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->waitForText('Bite')
                ->click('#nextnav')
                ->waitForText('Solar Beam')
                ->assertSee('Solar Beam')
                ->click('#previousnav')
                ->waitForText('Bite')
                ->assertSee('Bite');
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

    public function testEditAttack()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->waitForText('Pound')
                ->click('#edit3')
                ->waitForText('Power')
                ->type('#name', 'edit Leaf Blade')
                ->click('#editsave')
                ->waitForText('Saved')
                ->click('#editback')
                ->waitForText('Pound')
                ->assertSee('edit Leaf Blade');
        });
    }

    public function testDeleteAttack()
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/attack')
                ->waitForText('Pound')
                ->click('#delete7')
                ->waitForText('sure')
                ->click('#modaldelete')
                ->waitForText('Phantom Grasp')
                ->assertDontSee('Sting Strike');
        });
    }
}
