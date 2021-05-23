<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $appLctn1_1 = new Appointment;
        $appLctn1_1->date = date_create('2021-07-09');
        $appLctn1_1->maxUsers = 15;
        $appLctn1_1->location()->associate(Location::find(1));
        $appLctn1_1->save();

        $appLctn1_2 = new Appointment;
        $appLctn1_2->date = date_create('2021-08-09');
        $appLctn1_2->maxUsers = 15;
        $appLctn1_2->location()->associate(Location::find(1));
        $appLctn1_2->save();

        $appLctn1_3 = new Appointment;
        $appLctn1_3->date = date_create('2021-09-09');
        $appLctn1_3->maxUsers = 15;
        $appLctn1_3->location()->associate(Location::find(1));
        $appLctn1_3->save();

        $appLctn1_4 = new Appointment;
        $appLctn1_4->date = date_create('2021-10-09');
        $appLctn1_4->maxUsers = 15;
        $appLctn1_4->location()->associate(Location::find(1));
        $appLctn1_4->save();

        //Location 2 Appointments

        $appLctn2_1 = new Appointment;
        $appLctn2_1->date = date_create('2021-07-09');
        $appLctn2_1->maxUsers = 10;
        $appLctn2_1->location()->associate(Location::find(2));
        $appLctn2_1->save();

        $appLctn2_2 = new Appointment;
        $appLctn2_2->date = date_create('2021-08-09');
        $appLctn2_2->maxUsers = 10;
        $appLctn2_2->location()->associate(Location::find(2));
        $appLctn2_2->save();

        $appLctn2_3 = new Appointment;
        $appLctn2_3->date = date_create('2021-09-09');
        $appLctn2_3->maxUsers = 10;
        $appLctn2_3->location()->associate(Location::find(2));
        $appLctn2_3->save();

        $appLctn2_4 = new Appointment;
        $appLctn2_4->date = date_create('2021-10-09');
        $appLctn2_4->maxUsers = 10;
        $appLctn2_4->location()->associate(Location::find(2));
        $appLctn2_4->save();

        //Location 3 Appointments

        $appLctn3_1 = new Appointment;
        $appLctn3_1->date = date_create('2021-07-10');
        $appLctn3_1->maxUsers = 8;
        $appLctn3_1->location()->associate(Location::find(3));
        $appLctn3_1->save();

        $appLctn3_2 = new Appointment;
        $appLctn3_2->date = date_create('2021-08-10');
        $appLctn3_2->maxUsers = 8;
        $appLctn3_2->location()->associate(Location::find(3));
        $appLctn3_2->save();

        $appLctn3_3 = new Appointment;
        $appLctn3_3->date = date_create('2021-09-10');
        $appLctn3_3->maxUsers = 8;
        $appLctn3_3->location()->associate(Location::find(3));
        $appLctn3_3->save();

        $appLctn3_4 = new Appointment;
        $appLctn3_4->date = date_create('2021-10-10');
        $appLctn3_4->maxUsers = 8;
        $appLctn3_4->location()->associate(Location::find(3));
        $appLctn3_4->save();

        //Location 4 Appointments

        $appLctn4_1 = new Appointment;
        $appLctn4_1->date = date_create('2021-07-07');
        $appLctn4_1->maxUsers = 9;
        $appLctn4_1->location()->associate(Location::find(4));
        $appLctn4_1->save();

        $appLctn4_2 = new Appointment;
        $appLctn4_2->date = date_create('2021-08-07');
        $appLctn4_2->maxUsers = 9;
        $appLctn4_2->location()->associate(Location::find(4));
        $appLctn4_2->save();

        $appLctn4_3 = new Appointment;
        $appLctn4_3->date = date_create('2021-09-07');
        $appLctn4_3->maxUsers = 9;
        $appLctn4_3->location()->associate(Location::find(4));
        $appLctn4_3->save();

        $appLctn4_4 = new Appointment;
        $appLctn4_4->date = date_create('2021-10-07');
        $appLctn4_4->maxUsers = 9;
        $appLctn4_4->location()->associate(Location::find(4));
        $appLctn4_4->save();


        /*
        DB::table('appointments')->insert([
            'location_id' => 1,
            'date' => date("Y-m-d H:i:s"),
            'maxUsers' => 8,
        ]);

        DB::table('appointments')->insert([
            'location_id' => 2,
            'date' => date("Y-m-d H:i:s"),
            'maxUsers' => 12,
        ]);

        DB::table('appointments')->insert([
            'location_id' => 3,
            'date' => date(),
            'maxUsers' => 5,
        ]);

        DB::table('appointments')->insert([
            'location_id' => 4,
            'date' => date("Y-m-d H:i:s"),
            'maxUsers' => 14,
        ]);
        */

    }
}
