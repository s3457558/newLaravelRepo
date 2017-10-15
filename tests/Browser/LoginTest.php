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
        //admin login
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','admin@admin')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->assertPathIs('/capstone/public/login');
        });
    }
        //admin logou
    public function testLogout(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','admin@admin')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->press('#Lout')
                    ->assertPathIs('/capstone/public/logout');
        });

    }
    public function testUserLogIn()
    {
        //user login
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','gmail@gmail')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->assertPathIs('/capstone/public/login');
        });
    }
    //user logout
    public function testUserLogout(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','gmail@gmail')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->press('#Lout')
                    ->assertPathIs('/capstone/public/logout');
                    
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
