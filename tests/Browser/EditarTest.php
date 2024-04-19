<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditar(): void
    {
        $this->browse(function (Browser $browser) {
        $browser->visit('usuarios')
        ->pause(1400)
        ->clickLink(link: 'Editar')
        ->pause(1400)
        ->type('name', 'Mauricio Fernandez')
        ->pause(1400)
        ->type('#email', 'MauricioFernan1@gmail.com')
        ->pause(1400)
        ->type('#password', 'MauricioF123')
        ->pause(1400)
        ->click('button[type="submit"]');
    });

        $this->browse(function (Browser $browser) {
        $browser->visit('usuarios')
        ->pause(1400)
        ->clickLink(link: 'Ver')
        ->pause(1400)
        ->clickLink(link:'Volver');
    });

        $this->browse(function (Browser $browser) {
        $browser->visit('usuarios')
        ->pause(1400)
        ->click('button[type="submit"]');
    });

    }
}
