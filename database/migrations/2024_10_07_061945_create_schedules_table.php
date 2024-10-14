<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
{
    Schema::create('schedules', function (Blueprint $table) {
        $table->id(); // Make sure this is the same type as 'schedule_id' in appointments
        // Other fields...
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
