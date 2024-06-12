<?php

use Laravel\Dusk\Browser;

test('floroue', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/pokemon/1')
            ->assertSee('About Floroue');
    });
});
