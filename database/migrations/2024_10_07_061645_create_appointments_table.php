<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
{
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('schedule_id')->constrained('schedules')->onDelete('cascade');
        // Other fields...
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
