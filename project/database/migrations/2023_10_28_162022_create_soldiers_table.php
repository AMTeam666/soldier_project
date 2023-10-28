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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nationalـcode');
            $table->string('phone_number');
            $table->string('fatherـname');
            $table->string('father_phone');
            $table->string('telephone');
            $table->string('image');
            $table->text('address');
            $table->integer('status')->unsigned->comment('0=>24-24 , 1=>36-12 , 2=>12-36 , 3=>edari');
            $table->integer('service_part')->unsigned;
            $table->timestamp('dispatchـdate');
            $table->timestamp('divisionـdate');
            $table->timestamp('endـdate');
            $table->timestamp('brithdayـdate');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
