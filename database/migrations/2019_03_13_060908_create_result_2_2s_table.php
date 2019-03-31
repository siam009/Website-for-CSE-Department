<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult22sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_2_2s', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Registration_no');
            
            $table->string('LG_CSE401')->nullable();
            $table->float('GP_CSE401',8,2)->nullable();

            $table->string('LG_CSE402')->nullable();
            $table->float('GP_CSE402',8,2)->nullable();

            $table->string('LG_CSE403')->nullable();
            $table->float('GP_CSE403',8,2)->nullable();

            $table->string('LG_CSE404')->nullable();
            $table->float('GP_CSE404',8,2)->nullable();

            $table->string('LG_CSE405')->nullable();
            $table->float('GP_CSE405')->nullable();

            $table->string('LG_EEE407')->nullable();
            $table->float('GP_EEE407',8,2)->nullable();

            $table->string('LG_EEE408')->nullable();
            $table->float('GP_EEE408',8,2)->nullable();

            $table->string('LG_MATH401')->nullable();
            $table->float('GP_MATH401',8,2)->nullable();

            $table->string('LG_SS401')->nullable();
            $table->float('GP_SS401',8,2)->nullable();


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
        Schema::dropIfExists('result_2_2s');
    }
}
