<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick')->unique();
            $table->string('password');
            $table->string('name');
            $table->enum('race', ['Boxer', 'Bulldog', 'Labrador', 'Caniche']);
            $table->enum('sex', ['Macho', 'Hembra']);
            $table->integer('edad');
            $table->string('name_humano');
            $table->string('phone');
            $table->string('picture_path')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
