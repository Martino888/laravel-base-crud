<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            // 'title'
            $table->string('title', 50);
            // 'description'
            $table->text('description');
            // 'thumb'
            $table->string('thumb', 250);
            // 'price'
            $table->string('price', 10);
            // 'series'
            $table->string('series',50);
            // 'sale_date'
            $table->date('sale_date');
            // 'type'
            $table->string('type', 20);
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
        Schema::dropIfExists('comics');
    }
}
