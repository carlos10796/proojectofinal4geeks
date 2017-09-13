<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterThumbnailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnails', function (Blueprint $table) {
            $table->string('imagen')->after('id')->nullable()->default('sin-imagen.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thumbnails', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
}
