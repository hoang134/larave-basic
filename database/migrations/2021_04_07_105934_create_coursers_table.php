<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursers', function (Blueprint $table) {
            $table->id();
            $table->string('courser_name');
            $table->unsignedBigInteger('fee');
            $table->unsignedBigInteger('semester');
            $table->unsignedBigInteger('total_slot');
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
        Schema::dropIfExists('coursers');
    }
}
