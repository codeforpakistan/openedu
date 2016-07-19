<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title')->unique();
            $table->text('content')->nullable();
            $table->integer('revision')->unsigned()->default(0);
            $table->integer('author')->unsigned()->nullable();
            $table->integer('parent')->unsigned()->default(0);
            $table->integer('lft')->unsigned()->default(0);
            $table->integer('rgt')->unsigned()->default(0);
            $table->integer('depth')->unsigned()->default(0);
            $table->boolean('active')->default(0);
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
        Schema::drop('nodes');
    }
}
