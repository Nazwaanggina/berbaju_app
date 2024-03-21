<?php

namespace Database\Seeders;
use App\Models\UserM;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::users::create([
        //     'name' => 'admin',
        //     'username' => 'admin',
        //     'password' => bcrypt('123'),
        //     'role' => 'admin',
        //     'created_at'=>now(),
        //     'updated_at'=>now(),
        // ]);


        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'name'=> 'admin',
            'role'=>'admin',
           
            // Add more columns as needed
        ]);
        DB::table('users')->insert([
            'username' => 'kasir',
            'password' => Hash::make('123'),
            'name'=> 'kasir',
            'role'=>'kasir',
           
            // Add more columns as needed
        ]);
        DB::table('users')->insert([
            'username' => 'owner',
            'password' => Hash::make('123'),
            'name'=> 'owner',
            'role'=>'owner',
           
            // Add more columns as needed
        ]);
       
    }
}
