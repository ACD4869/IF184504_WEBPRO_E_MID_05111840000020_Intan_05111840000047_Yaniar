<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returning', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedBigInteger('user_id');
          $table->integer('borrow_id');
          $table->unsignedBigInteger('staff_id')->nullable();
          $table->date('returnDate')->nullable();
          $table->timestamps();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('borrow_id')->references('id')->on('borrow')->onDelete('cascade');
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
        Schema::dropIfExists('returning');
    }
}
