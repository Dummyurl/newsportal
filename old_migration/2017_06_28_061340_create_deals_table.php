<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('news_title');
            $table->string('language');
            $table->text('news_description');
            $table->string('city');
            $table->string('ref_url');
            $table->string('country');
            $table->string('news_image');
            $table->string('news_video_url');

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
        Schema::dropIfExists('deals');
    }
}
