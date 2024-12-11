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
        Schema::create('recipe_grain', function (Blueprint $table) {
            $table->id();
            $table->integer('recipe_id');
            $table->integer('grain_id');
            $table->decimal('grain_massa', 16, 15);
            $table->decimal('grain_color', 18, 14);
            $table->decimal('grain_extract', 15, 13);
            $table->decimal('grain_percent', 4, 1);
            $table->tinyInteger('grain_spin_pos');
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
        Schema::dropIfExists('recipe_grain');
    }
};
