<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_produccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lote')->nullable();
            $table->string('producto')->nullable();
            $table->string('material')->nullable();
            $table->string('peso')->nullable();
            $table->string('color_base')->nullable();
            $table->string('lote_base')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('programa_produccions');
    }
}
