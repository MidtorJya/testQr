<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTextToArabicTextInArabicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arabics', function (Blueprint $table) {
            $table->renameColumn('text', 'arabic_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arabics', function (Blueprint $table) {
            $table->renameColumn('arabic_text', 'text');
        });
    }
}
