<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult32sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_3_2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Registration_no');
            
            $table->string('LG_CSE601')->nullable();
            $table->float('GP_CSE601',8,2)->nullable();

            $table->string('LG_CSE603')->nullable();
            $table->float('GP_CSE603',8,2)->nullable();

            $table->string('LG_CSE604')->nullable();
            $table->float('GP_CSE604',8,2)->nullable();

            $table->string('LG_CSE605')->nullable();
            $table->float('GP_CSE605',8,2)->nullable();

            $table->string('LG_CSE607')->nullable();
            $table->float('GP_CSE607')->nullable();

            $table->string('LG_CSE608')->nullable();
            $table->float('GP_CSE608',8,2)->nullable();

            $table->string('LG_CSE609')->nullable();
            $table->float('GP_CSE609',8,2)->nullable();

            $table->string('LG_CSE610')->nullable();
            $table->float('GP_CSE610',8,2)->nullable();

            $table->string('LG_CSE612')->nullable();
            $table->float('GP_CSE612',8,2)->nullable();


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
        Schema::dropIfExists('result_3_2s');
    }
}
