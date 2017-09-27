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
            'name'   => '300 Flinders St',
            'lat'    => '-37.818212',
            'lng'    => '144.964742'
        ]);
        //*****END OF CAR LOCATIONS SEED*******
        DB::table('cars')->insert([
            'name'            => 'Acura',
            'car_model'       => 'A',
            'price'           => '25',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',

        ]);
        DB::table('cars')->insert([
            'name'            => 'Aston Martin',
            'car_model'       => 'A',
            'price'           => '50',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',

        ]);
        DB::table('cars')->insert([
            'name'            => 'Audi',
            'car_model'       => 'A5',
            'price'           => '35',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',

        ]);
        DB::table('cars')->insert([
            'name'            => 'BMW',
            'car_model'       => 'M3',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',

        ]);
        DB::table('cars')->insert([
            'name'            => 'Infiniti',
            'car_model'       => 'Q30',
            'price'           => '35',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '1',

        ]);
        DB::table('cars')->insert([
            'name'            => 'Nissan',
            'car_model'       => '370Z',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '1',

        ]);


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
            'name'            => 'Land Rover',
            'car_model'       => 'Discovery',
            'price'           => '40',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '2',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Mercedes-Benz',
            'car_model'       => 'CLA',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Doge',
            'car_model'       => 'Charger',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Ford',
            'car_model'       => 'Focus',
            'price'           => '20',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Renault',
            'car_model'       => 'Captur',
            'price'           => '25',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'KIA',
            'car_model'       => 'Rio',
            'price'           => '20',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Peugeot',
            'car_model'       => '308',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        DB::table('cars')->insert([
            'name'            => 'Toyota',
            'car_model'       => 'RAV4',
            'price'           => '30',
            'isBooked'        => '0',
            'status'          => 'null',
            'car_location_id' => '3',

    ]);
        //*****END OF CARS SEED*******


        DB::table('users')->insert([
            'name'          =>'admin admin',
            'email'         =>'admin@admin',
            'password'      =>Hash::make('Hello123!'),
            'username'      =>'admin',
            'postcode'      =>'3000',
            'isAdmin'       =>'1',
            'isRecord'      =>'0',
        ]);

        DB::table('users')->insert([
            'name'          =>'BobbY McGee',
            'email'         =>'gmail@gmail',
            'password'      =>Hash::make('Hello123!'),
            'username'      =>'bobby',
            'postcode'      =>'3000',
            'isAdmin'       =>'0',
            'isRecord'      =>'0',
        ]);

        DB::table('users')->insert([
            'name'          =>'Doug Stanford',
            'email'         =>'gmail1@gmail',
            'password'      =>Hash::make('Hello123!'),
            'username'      =>'user',
            'postcode'      =>'3000',
            'isAdmin'       =>'0',
            'isRecord'      =>'0',
        ]);
    }
}
