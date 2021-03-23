<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Govtjobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govtjobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobname');
            $table->string('branch');
            $table->string('eligibility');
            $table->string('companyname');
            $table->dateTime('lastdate');   
            $table->mediumText('describtion');
            $table->string('jobtitileurl')->nullable();
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
        Schema::dropIfExists('govtjobs');
 
    }
}
