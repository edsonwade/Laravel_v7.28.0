<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobbyTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby_tag', function (Blueprint $table) {
            $table->unsignedInteger('hobby_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();
            $table->primary(['hobby_id', 'tag_id']);
            $table->timestamps();
        });
        //Foreign
        Schema::table('hobby_tag', function (Blueprint $table) {
            $table->foreign('hobby_id')->references('id')->on('hobbies');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobby_tag');
    }
}
