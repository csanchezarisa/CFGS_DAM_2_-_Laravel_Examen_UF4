<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTascasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tascas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('completed');
            $table->text('description');
            $table->unsignedBigInteger('projecte_id');
            $table->foreign('projecte_id')
                ->references('id')
                ->on('projectes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('tascas');
    }
}
