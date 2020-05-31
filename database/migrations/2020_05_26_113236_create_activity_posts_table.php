<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('title');
            $table->text('image');
            $table->string('user_name');
            $table->string('organisation_name');
            $table->string('date');
            $table->string('time');
            $table->string('region');
            $table->string('city');
            $table->text('kind_help');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('priorities', function($table) {
            $table->foreign('post_id')->references('id')->on('activity_categories')->onDelete('cascade');
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_posts');
    }
}
