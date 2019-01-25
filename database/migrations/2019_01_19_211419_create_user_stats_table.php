<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatsTable extends Migration
{
    /**
     *   $table->integer('parent_id')->nullable()->references('id')->on('regions')->onDelete('CASCADE');
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guild_member_id')->unsigned()->index();
            $table->integer('bricks_cnt')->unsigned();
            $table->integer('wood_cnt')->unsigned();
            $table->integer('ark_f')->unsigned();
            $table->integer('ark_m')->unsigned();
            $table->integer('arena_won')->unsigned();
            $table->integer('arena_lost')->unsigned();
            $table->integer('savings')->unsigned();
            $table->timestamps();
            $table->foreign('guild_member_id')->references('id')->on('guild_members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_stats');
    }
}
