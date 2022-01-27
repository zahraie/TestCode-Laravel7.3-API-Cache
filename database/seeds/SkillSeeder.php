<?php

use App\Skill ;
use Illuminate\Database\Seeder;
use Faker\Factory;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Skill::count()){
            $this->registerData();
        }
    }

    private function registerData()
    {       
        //truncate skills table
        Skill::truncate();

        //create 100 skills
        factory(Skill::class, 6)->create();       
    }
}
