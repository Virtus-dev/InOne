<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('first_last_name')->nullable(false);
            $table->string('second_last_name')->nullable(false);
            $table->string('phone_number')->unique();
            $table->string('email')->unique()->nullable(false);
            $table->string('gender')->nullable(false);
            $table->date('birth_date')->nullable(false);
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
        Schema::dropIfExists('contacts');
    }
};
