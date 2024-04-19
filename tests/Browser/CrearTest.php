<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CrearTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */

      protected $useDatabaseTransactions = false; 
      //use RefreshDatabase;
   
    public function testCrear(): void
    {    

        $this->browse(function (Browser $browser) {

            $browser->visit('usuarios')
                    ->clickLink(link: 'CREAR')
                    ->pause(1400)
                    ->waitForText( text: 'CREAR USUARIOS')
                    ->pause(1400)
                    ->type('name', 'Mauricio')
                    ->pause(1400)
                    ->type('#email', 'Mauricio1@gmail.com')
                    ->pause(1400)
                    ->type('#password', 'Mauricio123')
                    ->pause(1400)
                    ->click('button[type="submit"]');
                    
        }); 

        $this->browse(function (Browser $browser) {

            $browser->visit('usuarios')
                    ->clickLink(link: 'CREAR')
                    ->pause(1400)
                    ->waitForText( text: 'CREAR USUARIOS')
                    ->pause(1400)
                    ->type('name', 'Juan')
                    ->pause(1400)
                    ->type('#email', 'Juan20@gmail.com')
                    ->pause(1400)
                    ->type('#password', 'Juan123')
                    ->pause(1400)
                    ->click('button[type="submit"]');
                    
        }); 

        
    }
}
