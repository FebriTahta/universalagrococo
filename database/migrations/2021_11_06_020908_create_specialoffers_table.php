<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialoffers', function (Blueprint $table) {
            $table->id();
            $table->string('judul_mini')->nullable();
            $table->string('judul_heading')->nullable();
            $table->string('deskripsi')->nullable();
            $table->text('img')->nullable();
            $table->text('bg')->nullable();
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
        Schema::dropIfExists('specialoffers');
    }
}
