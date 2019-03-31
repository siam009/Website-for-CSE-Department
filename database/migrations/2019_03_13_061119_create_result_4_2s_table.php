<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult42sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_4_2s', function (Blueprint $table) {
            $table->bigIncrements('id');

             $table->string('Registration_no');

            $table->string('LG_CSE800')->nullable();
            $table->float('GP_CSE800',8,2)->nullable();

            $table->string('LG_CSE801')->nullable();
            $table->float('GP_CSE801',8,2)->nullable();

            $table->string('LG_CSE802')->nullable();
            $table->float('GP_CSE802',8,2)->nullable();

            $table->string('LG_CSE803')->nullable();
            $table->float('GP_CSE803',8,2)->nullable();

            $table->string('OptionalTheoryCode')->nullable();
            $table->string('LG_OptionalTheory')->nullable();
            $table->float('GP_OptionalTheory')->nullable();

            $table->string('OptionalLabCode')->nullable();
            $table->string('LG_OptionalLab')->nullable();
            $table->float('GP_OptionalLab',8,2)->nullable();


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
        Schema::dropIfExists('result_4_2s');
    }
}
