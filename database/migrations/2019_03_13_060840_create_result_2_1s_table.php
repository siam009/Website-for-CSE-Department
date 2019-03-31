<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult21sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_2_1s', function (Blueprint $table) {
            $table->bigIncrements('id');

           $table->string('Registration_no');
           
            $table->string('LG_CSE301')->nullable();
            $table->float('GP_CSE301',8,2)->nullable();

            $table->string('LG_CSE302')->nullable();
            $table->float('GP_CSE302',8,2)->nullable();

            $table->string('LG_CSE303')->nullable();
            $table->float('GP_CSE303',8,2)->nullable();

            $table->string('LG_CSE304')->nullable();
            $table->float('GP_CSE304',8,2)->nullable();

            $table->string('LG_CSE305')->nullable();
            $table->float('GP_CSE305')->nullable();

            $table->string('LG_CSE306')->nullable();
            $table->float('GP_CSE306',8,2)->nullable();

            $table->string('LG_EEE309')->nullable();
            $table->float('GP_EEE309',8,2)->nullable();

            $table->string('LG_EEE310')->nullable();
            $table->float('GP_EEE310',8,2)->nullable();

            $table->string('LG_MATH301')->nullable();
            $table->float('GP_MATH301',8,2)->nullable();


            $table->float('GPA',8,2);
            $table->float('CGPA',8,2);
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_2_1s');
    }
}
