<?php

use Laravel\Dusk\Browser;

test('See the Laracasts on the landing', function () {
    $this->browse(function (Browser $browser) {
        $browser
            ->resize(1920, 1080)
            ->visit('/')
            ->assertSee('Laracasts');
    });
});

test('See the Laravel News on the landing', function () {
    $this->browse(function(Browser $browser) {
        $browser
            ->resize(1920, 1080)
            ->visit('/')
            ->assertSee('Laravel News');
    });
});