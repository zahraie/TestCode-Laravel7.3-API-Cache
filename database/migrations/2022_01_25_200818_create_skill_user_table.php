<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(Schema::hasTable('skill_user')) return; 

        Schema::create('skill_user', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('user_id');
    

            $table->enum('level',['basic', 'intermediate', 'advance']);

            $table->foreignId('skill')
            ->references('id')
            ->on('skills');
            
            $table->foreign ('user_id')
            ->references('id')
            ->on('users'); 
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_user');
    }
}
