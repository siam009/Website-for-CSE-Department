<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult31sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_3_1s', function (Blueprint $table) {
           $table->bigIncrements('id');

            $table->string('Registration_no');
            
            $table->string('LG_CSE501')->nullable();
            $table->float('GP_CSE501',8,2)->nullable();

            $table->string('LG_CSE502')->nullable();
            $table->float('GP_CSE502',8,2)->nullable();

            $table->string('LG_CSE503')->nullable();
            $table->float('GP_CSE503',8,2)->nullable();

            $table->string('LG_CSE505')->nullable();
            $table->float('GP_CSE505',8,2)->nullable();

            $table->string('LG_CSE506')->nullable();
            $table->float('GP_CSE506')->nullable();

            $table->string('LG_CSE507')->nullable();
            $table->float('GP_CSE507',8,2)->nullable();

            $table->string('LG_CSE508')->nullable();
            $table->float('GP_CSE508',8,2)->nullable();

            $table->string('LG_CSE509')->nullable();
            $table->float('GP_CSE509',8,2)->nullable();

            $table->string('LG_SS501')->nullable();
            $table->float('GP_SS501',8,2)->nullable();


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
        Schema::dropIfExists('result_3_1s');
    }
}
