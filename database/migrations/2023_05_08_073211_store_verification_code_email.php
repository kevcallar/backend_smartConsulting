<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('email_code', function (Blueprint $table) {
        $table->integer('otp');
        $table->foreignId('client_id')->constrained()->onDelete('cascade');
        // $table->dateTime('expires_at');
        $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('email_code');
    }
};
