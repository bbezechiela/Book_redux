<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = [
            [
                'type' => 'Admin',
                'first_name' => 'FirstAdmin',
                'last_name' => 'FirstAdmin',
                'email' => 'admin@admin.com',
                'phone_number' => '09169452347',
                'birthday' => '2003-03-12',
                'gender' => 'Male',
                'username' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'type' => 'General User',
                'first_name' => 'Marc Eubert',
                'last_name' => 'Contado',
                'email' => 'marceubert886@gmail.com',
                'phone_number' => '09169452347',
                'birthday' => '2002-07-16',
                'gender' => 'Male',
                'username' => 'mec369',
                'password' => bcrypt('marceubert')
            ],
            [
                'type' => 'General User',
                'first_name' => 'firstName',
                'last_name' => 'lastName',
                'email' => 'sample@sample.com',
                'phone_number' => '09169452347',
                'birthday' => '2003-02-13',
                'gender' => 'Male',
                'username' => 'user',
                'password' => bcrypt('pass')
            ]
        ];

        // DB::table('users')->insert([
        //     'type' => 'Admin',
        //     'first_name' => 'FirstAdmin',
        //     'last_name' => 'FirstAdmin',
        //     'email' => 'admin@admin.com',
        //     'phone_number' => '09169452347',
        //     'birthday' => '2003-03-12',
        //     'gender' => 'Male',
        //     'username' => 'admin',
        //     'password' => bcrypt('admin')
        // ]);

        foreach ($user as $users) {
            DB::table('users')->insert([
                'type' => $users['type'],
                'first_name' => $users['first_name'],
                'last_name' => $users['last_name'],
                'email' => $users['email'],
                'phone_number' => $users['phone_number'],
                'birthday' => $users['birthday'],
                'gender' => $users['gender'],
                'username' => $users['username'],
                'password' => $users['password']
            ]);
        }

        DB::table('users')->insert([
            'type' => 'Bookseller',
            'owner_name' => 'Store Owner',
            'email' => 'contact@bookredux.store',
            'address' => 'Tacloban, City',
            'business_name' => 'Book Store',
            'phone_number' => '09169452347',
            'registration_number' => '12345678',
            'date_registered' => '02/13/2022',
            'username' => 'store',
            'password' => bcrypt('user')
        ]);
    }
}
