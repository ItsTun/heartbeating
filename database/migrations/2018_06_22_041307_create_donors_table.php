<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
          $table->increments('id');
           $table->integer('donorID');
            $table->string('donroName');
            $table->date('birthday');
            $table->string('address');
            
            $table->string('phNo');
            $table->integer('count');
            $table->date('date');
            
            $table->string('phRd');
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
        Schema::dropIfExists('donors');
    }
}
