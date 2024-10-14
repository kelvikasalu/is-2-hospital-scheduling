<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('doctors', function (Blueprint $table) {
        $table->string('phone')->nullable(); // or you can specify a default if needed
    });
}

public function down()
{
    Schema::table('doctors', function (Blueprint $table) {
        $table->dropColumn('phone');
    });
}

};
