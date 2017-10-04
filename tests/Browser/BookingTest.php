<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class goodTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /** test */
    public function testExample()
    {
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/capstone/public/login')
                    ->type('email','admin@admin')
                    ->type('password','Hello123!')
                    ->press('#makeit')
                    ->visit('/capstone/public/booking.create')
                    ->select('pickup','1')
                    ->select('#carName','Toyota')
                    ->select('dropoff','Queen Victoria Market')
                    ->keys('#date','11032017')
                    ->keys('#startTime','1011A')
                    ->keys('#endTime','1112A')
                    ->press('#bookButton')
                    ->assertPathIs('/capstone/public/thankyou');
        });    
    }
    
}
