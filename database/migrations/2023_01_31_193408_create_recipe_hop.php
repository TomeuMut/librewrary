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
        Schema::create('recipe_hop', function (Blueprint $table) {
            $table->id();
            $table->integer('recipe_id');
            $table->integer('hop_id');
            $table->decimal('hop_time', 3, 1);
            $table->decimal('hop_massa', 4, 1);
            $table->decimal('hop_alfa', 16, 14);
            $table->tinyInteger('hop_gran');
            $table->tinyInteger('hop_spin_pos');
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
        Schema::dropIfExists('recipe_hop');
    }
};
