<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_locations')->insert([
            'name'   => 'Melbourne Central',
            'lat'    => '-37.8108',
            'lng'    => '144.9631'
        ]);
        DB::table('car_locations')->insert([
            'name'   => 'Queen Victoria Market',
            'lat'    => '-37.8076',
            'lng'    => '144.9568'
        ]);
        DB::table('car_locations')->insert([
            'name'   => '98 Victoria St Carlton VIC 3053',
            'lat'    => '-37.806584',
            'lng'    => '144.964161'
        ]);
        //*****END OF CAR LOCATIONS SEED*******
        DB::table('cars')->insert([
            'name'            => 'Tesla',
            'car_model'       => 'S',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '1',
        ]);
        DB::table('cars')->insert([
            'name'            => 'Toyota Camry',
            'car_model'       => '05',
            'price'           => '10',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '1',
        ]);
        DB::table('cars')->insert([
            'name'            => 'Honda Civic',
            'car_model'       => '09',
            'price'           => '20',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',
        ]);
        DB::table('cars')->insert([
            'name'            => 'Honda Civic',
            'car_model'       => '09',
            'price'           => '20',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',
        ]);
        //*****END OF CARS SEED*******
    }
}