<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 60)->nullable();
            $table->string('Lastname', 60)->nullable();
            $table->string('Location', 60)->nullable();
            $table->string('Hotelname', 60)->nullable();
            $table->string('Date')->nullable();
            $table->string('RoomType', 60)->nullable();
            $table->string('Citizenship', 50)->nullable();
            $table->string('Gender', 12)->nullable();
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
        Schema::dropIfExists('Bookings');
    }
}
