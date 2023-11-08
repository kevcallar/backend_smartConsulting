<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('invoice', function (Blueprint $table) {
            $table->boolean('estado')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('invoice', function (Blueprint $table) {
            $table->boolean('estado')->change();
        });
    }
};