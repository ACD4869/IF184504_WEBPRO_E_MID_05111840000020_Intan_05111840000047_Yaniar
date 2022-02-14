<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('author_id');
          $table->integer('publisher_id');
          $table->integer('category_id');
          $table->integer('shelf_id');
          $table->string('title');
          $table->char('ISBN');
          $table->date('publicationYear');
          $table->integer('stock');
          $table->timestamps();
          $table->foreign('author_id')->references('id')->on('author');
          $table->foreign('publisher_id')->references('id')->on('publisher');
          $table->foreign('category_id')->references('id')->on('category');
          $table->foreign('shelf_id')->references('id')->on('shelf');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
