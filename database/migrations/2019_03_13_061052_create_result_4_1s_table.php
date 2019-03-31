<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult41sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_4_1s', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Registration_no');
            
            $table->string('LG_CSE700')->nullable();
            $table->float('GP_CSE700',8,2)->nullable();

            $table->string('LG_CSE701')->nullable();
            $table->float('GP_CSE701',8,2)->nullable();

            $table->string('LG_CSE702')->nullable();
            $table->float('GP_CSE702',8,2)->nullable();

            $table->string('LG_CSE703')->nullable();
            $table->float('GP_CSE703',8,2)->nullable();

            $table->string('LG_CSE704')->nullable();
            $table->float('GP_CSE704')->nullable();

            $table->string('LG_IPE701')->nullable();
            $table->float('GP_IPE701',8,2)->nullable();

            $table->string('LG_SS703')->nullable();
            $table->float('GP_SS703',8,2)->nullable();

            $table->string('LG_SS705')->nullable();
            $table->float('GP_SS705',8,2)->nullable();

            $table->string('OptionalSubCode')->nullable();
            $table->string('LG_Optional')->nullable();
            $table->float('GP_Optional',8,2)->nullable();


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
        Schema::dropIfExists('result_4_1s');
    }
}
