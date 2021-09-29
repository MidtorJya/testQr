<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
           
            $table->id();
            $table->string('text');
            $table->timestamps();

            // F key
            $table->unsignedBigInteger('ayat_id')->nullable();
            $table->foreign('ayat_id')->references('id')->on('ayats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
        
    }
}
