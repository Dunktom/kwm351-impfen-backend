<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => "Design Center Linz",
            'city' => "Linz",
            'street' => "Europaplatz",
            'housenumber' => 1,
            'zipcode' => 4020,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('locations')->insert([
            'name' => "Kepler Universitätsklinikum MC V Linz",
            'city' => "Linz",
            'street' => "Krankenhausstraße",
            'housenumber' => 26,
            'zipcode' => 4020,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('locations')->insert([
            'name' => "Promenaden Galerie Linz",
            'city' => "Linz",
            'street' => "Promenade",
            'housenumber' => 25,
            'zipcode' => 4020,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('locations')->insert([
            'name' => "Teststraße Magazingasse Linz",
            'city' => "Linz",
            'street' => "Magazingasse",
            'housenumber' => 8,
            'zipcode' => 4020,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

    }
}
