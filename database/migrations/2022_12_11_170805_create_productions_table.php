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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->text('unit');
            $table->text('line');
            $table->integer('brute_j')->nullable();
            $table->integer('conforme_j')->nullable();
            $table->integer('rebut_j')->nullable();
            $table->integer('brute_m')->nullable();
            $table->integer('conforme_m')->nullable();
            $table->integer('rebut_m')->nullable();
            $table->integer('taux_real')->nullable();
            $table->integer('taux_rebut')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('productions');
    }
};
