<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('birthdate');
            $table->string('certificate')->nullable();
            $table->string('job')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->boolean('joinBefore');
            $table->string('place')->nullable();
            $table->string('type')->nullable();
            $table->string('whatYouHaveDone')->nullable();
            $table->string('KindOfVolentering')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
