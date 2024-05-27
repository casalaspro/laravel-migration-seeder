<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('trains')->truncate();

        $trains = [
            ['company' => 'Deutsche Bahn',
            'departure_station' => 'München Hbf',
            'arrival_station' => 'Amsterdam Centraal',
            'departure_time' => '09:06:31',
            'arrival_time' => '12:00:00',
            'train_code' => '111111111199',
            'carriages_number' => 12,
            'on_time' => TRUE,
            'cancelled' => FALSE,
            'departure_day' => '2024-05-27',
            'arrival_day' => '2024-05-27'],
            ['company' => 'Trenitalia',
            'departure_station' => 'Roma Fiumicino',
            'arrival_station' => 'Amsterdam Centraal',
            'departure_time' => '12:06:31',
            'arrival_time' => '22:00:00',
            'train_code' => '133333111199',
            'carriages_number' => 8,
            'on_time' => TRUE,
            'cancelled' => FALSE,
            'departure_day' => '2024-05-27',
            'arrival_day' => '2024-05-27'],
            
        ];

        
        // foreach($trains as $train){
        //     $newTrain = new Train();
        //     $newTrain->company = $train['company'];
        //     $newTrain->departure_station = $train['departure_station'];
        //     $newTrain->arrival_station = $train['arrival_station'];
        //     $newTrain->departure_time = $train['departure_time'];
        //     $newTrain->arrival_time = $train['arrival_time'];
        //     $newTrain->train_code = $train['train_code'];
        //     $newTrain->carriages_number = $train['carriages_number'];
        //     $newTrain->on_time = $train['on_time'];
        //     $newTrain->cancelled = $train['cancelled'];
        //     $newTrain->departure_day = $train['departure_day'];
        //     $newTrain->arrival_day = $train['arrival_day'];

        //     $newTrain->save();
        // }
        
        $companies = ['Trenitalia', 'Itali Treno', 'Frecciarossa', 'SNCF', 'OUIGO', 'Deutsche Bahn', 'FlixTrain', 'Renfe', 'Eurostar', 'Stansted Express'];

        for($i=0; $i<100; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement($companies);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->unique()->bothify('############');
            $newTrain->carriages_number = $faker->numberBetween(8, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->departure_day = $faker->dateTimeBetween('today', '+1 month');
            $newTrain->arrival_day = $faker->dateTimeBetween('today', '+1 month');

            $newTrain->save();
        }
    }
}
