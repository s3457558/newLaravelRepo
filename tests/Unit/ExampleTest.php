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
        $this->assertDatabaseHas('car_locations',['name'=>'300 Flinders St','lat'=>'-37.818212','lng'=>'144.964742']);
        $this->assertDatabaseHas('car_locations',['name'=>'98 Victoria St Carlton VIC 3053','lat'=>'-37.806584','lng'=>'144.964161']);
        $this->assertDatabaseHas('car_locations',['name'=>'305 Grattan St','lat'=>'-37.799964','lng'=>'144.957437']);
        $this->assertDatabaseHas('car_locations',['name'=>'JVM Wood & Company','lat'=>'-37.808647','lng'=>'144.977890']);
        $this->assertDatabaseHas('car_locations',['name'=>'344 Queensberry St','lat'=>'-37.803864','lng'=>'144.956609']);
        $this->assertDatabaseHas('car_locations',['name'=>'Jetts Docklands','lat'=>'-37.820494','lng'=>'144.948790']);
        $this->assertDatabaseHas('car_locations',['name'=>'99 Carlton St','lat'=>'-37.800885','lng'=>'144.971021']);
        $this->assertDatabaseHas('car_locations',['name'=>'390 Collins St','lat'=>'-37.816808','lng'=>'144.961700']);


    }
    public function testCarDummyData(){
    	 $this->assertDatabaseHas('cars',['name'=> 'Tesla','car_model'=>'S','price'=> '30','isBooked'=> '0',
            'status'          => 'null',
             'car_location_id' => '6']);
    	 $this->assertDatabaseHas('cars',['name'=> 'Toyota Camry', 'car_model'       => '05',
               'price'           => '10',
             'isBooked'        => '0',
             'status'          => 'null',
             'car_location_id' => '7']);
    	 $this->assertDatabaseHas('cars',['name'            => 'Honda Civic',
               'car_model'       => '09',
               'price'           => '20',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '8']);
         $this->assertDatabaseHas('cars',['name'            => 'Acura',
               'car_model'       => 'A',
               'price'           => '25',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '1']);
          $this->assertDatabaseHas('cars',['name'            => 'Aston Martin',
               'car_model'       => 'A',
               'price'           => '50',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '2']);
          $this->assertDatabaseHas('cars',['name'            => 'Audi',
               'car_model'       => 'A5',
               'price'           => '35',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '3']);
         // $this->assertDatabaseHas('cars',['name'            => 'Infiniti',
         //          'car_model'       => 'Q30',
         //          'price'           => '35',
         //          'isBooked'        => '0',
         //        'status'          => 'null',
         //       'car_location_id' => '4']);
          $this->assertDatabaseHas('cars',['name'            => 'Nissan',
               'car_model'       => '370Z',
               'price'           => '30',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '5']);
          $this->assertDatabaseHas('cars',['name'            => 'Land Rover',
               'car_model'       => 'Discovery',
               'price'           => '40',
               'isBooked'        => '0',
               'status'          => 'null',
               'car_location_id' => '9']);
    }
    
}
