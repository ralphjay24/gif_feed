<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifs', function (Blueprint $table) {
            $table->string('id');
            $table->string('title');
            $table->string('type');
            $table->string('slug');
            $table->string('url');
            $table->string('bitly_url');
            $table->string('embed_url');
            $table->string('username')->nullable();
            $table->string('source');
            $table->string('rating');
            $table->dateTime('trending_datetime')->nullable();
            $table->dateTime('import_datetime')->nullable();
            $table->dateTime('create_datetime')->nullable();
            $table->dateTime('update_datetime')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifs');
    }
}
