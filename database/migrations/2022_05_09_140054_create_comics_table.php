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
            // 'name'
            $table->string('name');
            // 'poster'
            $table->string('poster');
            // 'series'
            $table->string('series');
            // 'price'
            $table->float('price');
            // 'description'
            $table->text('description');
            // 'sale_date'
            $table->date('sale_date');
            // 'page_count'
            $table->integer('page_count');
            // 'rated'
            $table->smallInteger('rated');
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
