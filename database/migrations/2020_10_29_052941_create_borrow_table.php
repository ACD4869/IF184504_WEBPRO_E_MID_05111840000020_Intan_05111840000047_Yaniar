<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedBigInteger('user_id');
          $table->integer('book_id');
          $table->unsignedBigInteger('staff_id');
          $table->integer('returning_id')->nullable();
          $table->date('borrowDate');
          $table->date('estimatedReturnDate');
          $table->timestamps();
          $table->string('status');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('book_id')->references('id')->on('book');
          $table->foreign('staff_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow');
    }
}
