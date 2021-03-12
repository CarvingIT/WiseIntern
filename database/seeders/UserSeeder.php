<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add users
        DB::table('users')->insert(
            [
                'name'=>'Wise Intern',
                'email'=>'admin@wiseintern.com',
                'password'=>bcrypt('WiseIntern!@#'),
                'remember_token'=>0,
                'created_at'=>NOW(),
                'updated_at'=>NOW(),
            ]
        );
        
        // create default roles
        DB::table('roles')->insert(
            [
                'name'=>'admin'
            ]
        );

        // make first user admin
        DB::table('user_roles')->insert(
            [
                'user_id'=>1,
                'role_id'=>1
            ]
        );
    }
}
