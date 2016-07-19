<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->text('content')->nullable();
            $table->integer('revision')->unsigned();
            $table->integer('author')->unsigned()->nullable();
            $table->integer('parent')->unsigned();
            $table->integer('lft')->unsigned();
            $table->integer('rgt')->unsigned();
            $table->integer('depth')->unsigned();
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('author')
                  ->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history');
    }
}
