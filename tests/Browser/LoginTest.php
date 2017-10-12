<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogIn()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','admin@admin')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->assertPathIs('/capstone/public/login');
        });
    }
     public function testRegister()
     {
             $this->browse(function (Browser $browser) {
             $browser->visit('/capstone/public/register')
                     ->type('username','HelloWorld')
                    ->type('firstname','Changyuan')
                    ->type('lastname','Liu')
                     ->type('postcode','3000')
                     ->type('email','abc@adc.com')
                     ->type('password','Hello!12')
                     ->type('password_confirmation','Hello!12')
                     ->press('#RegisterIn')
                     ->assertPathIs('/capstone/public/register');
                    
        });

     }
}
