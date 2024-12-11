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
        Schema::create('recipe_fermentable', function (Blueprint $table) {
            $table->id();
            $table->integer('recipe_id');
            $table->integer('fermentable_id');
            $table->decimal('fermentable_massa', 16, 15);
            $table->decimal('fermentable_color', 18, 14);
            $table->decimal('fermentable_extract', 15, 13);
            $table->decimal('fermentable_percent', 4, 1);
            $table->tinyInteger('fermentable_spin_pos');
            $table->string('fermentable_type');
            $table->integer('fermentable_boilTime');
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
        Schema::dropIfExists('recipe_fermentable');
    }
};
