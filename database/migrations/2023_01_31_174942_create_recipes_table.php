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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('volume', 3, 1);
            $table->decimal('effect', 3, 1);
            $table->decimal('time', 3, 1);
            $table->decimal('modul', 2, 1);
            $table->tinyInteger('carbo');
            $table->tinyInteger('carbo_spin_pos');
            $table->decimal('carbo_vol', 3, 1);
            $table->decimal('carbo_temp', 3, 1);
            $table->decimal('carbo_co2', 15, 14);
            $table->string('sg');
            $table->string('fg');
            $table->decimal('alco', 3, 1);
            $table->decimal('color', 16, 14);
            $table->decimal('IBU', 3, 1);
            $table->tinyInteger('intSRM');
            $table->string('dop_info');            
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
        Schema::dropIfExists('recipes');
    }
};
