<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serverstatus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->integer('status')->default(1); //0 = unstable; 1 = online; 2 = offline
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
        Schema::dropIfExists('serverstatus');
    }
}