<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address_main')->nullable();
            $table->string('address_additional')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_main')->nullable();
            $table->string('phone_additional')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(false)->nullable();
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
        Schema::dropIfExists('basics');
    }
}
