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
        Schema::create('fans', function (Blueprint $table) {
            $table->id();
            $table->string('email', 300)->unique()->nullable(false);
            $table->string('firstname', 300)->nullable(false);
            $table->string('lastname', 300)->nullable(false);
            $table->string('phonenumber', 300)->nullable(false);
            $table->date('borndate')->nullable(false);
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
        Schema::dropIfExists('fans');
    }
};
