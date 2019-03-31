<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_1_2s', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Registration_no');
            
            $table->string('LG_CSE201')->nullable();
            $table->float('GP_CSE201',8,2)->nullable();

            $table->string('LG_CSE202')->nullable();
            $table->float('GP_CSE202',8,2)->nullable();

            $table->string('LG_CSE203')->nullable();
            $table->float('GP_CSE203',8,2)->nullable();

            $table->string('LG_MATH201')->nullable();
            $table->float('GP_MATH201',8,2)->nullable();

            $table->string('LG_CHEM201')->nullable();
            $table->float('GP_CHEM201')->nullable();

            $table->string('LG_CHEM202')->nullable();
            $table->float('GP_CHEM202',8,2)->nullable();

            $table->string('LG_ENG201')->nullable();
            $table->float('GP_ENG201',8,2)->nullable();

            $table->string('LG_ENG202')->nullable();
            $table->float('GP_ENG202',8,2)->nullable();

            $table->string('LG_SS201')->nullable();
            $table->float('GP_SS201',8,2)->nullable();


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
        Schema::dropIfExists('result_1_2s');
    }
}
