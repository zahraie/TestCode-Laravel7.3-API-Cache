<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate users table
        User::truncate();

        //create 100 user
        factory(User::class, 100)->create();
    }
}
