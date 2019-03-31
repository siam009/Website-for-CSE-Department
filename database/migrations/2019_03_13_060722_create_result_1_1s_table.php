<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResult11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_1_1s', function (Blueprint $table) {
           $table->bigIncrements('id');
            
            $table->string('Registration_no');

            $table->string('LG_CSE101')->nullable();
            $table->float('GP_CSE101',8,2)->nullable();

            $table->string('LG_CSE102')->nullable();
            $table->float('GP_CSE102',8,2)->nullable();

            $table->string('LG_EEE105')->nullable();
            $table->float('GP_EEE105',8,2)->nullable();

            $table->string('LG_EEE106')->nullable();
            $table->float('GP_EEE106',8,2)->nullable();

            $table->string('LG_ME100')->nullable();
            $table->float('GP_ME100',8,2)->nullable();

            $table->string('LG_ME101')->nullable();
            $table->float('GP_ME101',8,2)->nullable();

            $table->string('LG_ME102')->nullable();
            $table->float('GP_ME102',8,2)->nullable();

            $table->string('LG_MATH101')->nullable();
            $table->float('GP_MATH101',8,2)->nullable();

            $table->string('LG_PHY101')->nullable();
            $table->float('GP_PHY101',8,2)->nullable();

            $table->string('LG_PHY102')->nullable();
            $table->float('GP_PHY102',8,2)->nullable();

            $table->string('LG_SS101')->nullable();
            $table->float('GP_SS101',8,2)->nullable();

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
        Schema::dropIfExists('result_1_1s');
    }
}
