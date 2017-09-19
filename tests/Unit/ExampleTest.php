<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\car;
use DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLocationDummyData()
    {
        //$this->assertTrue(true);
        $this->assertDatabaseHas('car_locations',['name'=>'Melbourne Central','lat'=>'-37.8108','lng'=>'144.9631']);
        $this->assertDatabaseHas('car_locations',['name'=>'Queen Victoria Market','lat'=>'-37.8076','lng'=>'144.9568']);

    }
    public function testCarDummyData(){
    	$this->assertDatabaseHas('cars',['name'=> 'Tesla','car_model'=>'S','price'=> '30','isBooked'=> '0',
            'status'          => 'null',
            'car_location_id' => '1']);
    	$this->assertDatabaseHas('cars',['name'            => 'Toyota Camry',
            'car_model'       => '05',
            'price'           => '10',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '1']);
    	$this->assertDatabaseHas('cars',['name'            => 'Honda Civic',
            'car_model'       => '09',
            'price'           => '20',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2']);

    }
}
