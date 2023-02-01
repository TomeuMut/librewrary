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
        Schema::create('recipe_yeast', function (Blueprint $table) {
            $table->id();
            $table->integer('recipe_id');
            $table->integer('yeast_id');
            $table->integer('yeast_spin_pos');
            $table->integer('yeast_temp');
            $table->integer('yeast_atten');
            $table->string('yeast_type');
            $table->string('yeast_forma');
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
        Schema::dropIfExists('recipe_yeast');
    }
};
