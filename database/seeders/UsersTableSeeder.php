<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = new User;
        $user1->firstName = "Markus";
        $user1->lastName = "Muster";
        $user1->email = "mamu@gmail.com";
        $user1->gender = "male";
        $user1->password = bcrypt('mamu123');
        $user1->socialSecurityNumber = 1234587494;
        $user1->save();

        $user2 = new User;
        $user2->firstName = "Theo";
        $user2->lastName = "Tester";
        $user2->gender = "male";
        $user2->email = "theotester@gmail.com";
        $user2->password = bcrypt('theo123');
        $user2->socialSecurityNumber = 1234588894;
        $user2->appointment_id = 5;
        $user2->save();

        $user3 = new User;
        $user3->firstName = "Adolf";
        $user3->lastName = "Admin";
        $user3->gender = "apachekampfhelikopter";
        $user3->email = "adiadmin@gmail.com";
        $user3->password = bcrypt('admin123');
        $user3->socialSecurityNumber = 1234588686;
        $user3->appointment_id = 5;
        $user3->vaccinated = true;
        $user3->admin = true;
        $user3->save();

        $user4 = new User;
        $user4->firstName = "Petra";
        $user4->lastName = "Poserin";
        $user4->gender = "female";
        $user4->email = "pp@gmail.com";
        $user4->password = bcrypt('petra123');
        $user4->socialSecurityNumber = 1234586584;
        $user4->appointment_id = 13;
        $user4->admin = false;
        $user4->save();

        $user5 = new User;
        $user5->firstName = "Gertrude";
        $user5->lastName = "Ganz";
        $user5->gender = "female";
        $user5->email = "gertrude@gmail.com";
        $user5->password = bcrypt('gertrude123');
        $user5->socialSecurityNumber = 1234584873;
        $user5->appointment_id = 14;
        $user5->admin = false;
        $user5->save();

        $user6 = new User;
        $user6->firstName = "Martha";
        $user6->lastName = "Möglich";
        $user6->gender = "apachekampfhelikopter";
        $user6->email = "mundm@gmail.com";
        $user6->password = bcrypt('martha123');
        $user6->socialSecurityNumber = 1234586648;
        $user6->appointment_id = 6;
        $user6->vaccinated = true;
        $user6->admin = true;
        $user6->save();

        /*
        DB::table('users')->insert([
            'firstName' => "Markus",
            'lastName' => "Muster",
            'email' => "mamu@gmail.com",
            'password' => "mamu123",
            'socialSecurityNumber' => 1234587494,
            'admin' => false
        ]);

        DB::table('users')->insert([
            'firstName' => "Theo",
            'lastName' => "Tester",
            'email' => "theotester@gmail.com",
            'password' => "theo123",
            'socialSecurityNumber' => 1234588894,
            'admin' => false
        ]);

        DB::table('users')->insert([
            'firstName' => "Adolf",
            'lastName' => "Admin",
            'email' => "adiadmin@gmail.com",
            'password' => "admin123",
            'socialSecurityNumber' => 1234588686,
            'admin' => true
        ]);
        */
    }
}
