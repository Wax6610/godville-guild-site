<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProxyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proxy', function (Blueprint $table) {
            $table->increments('id');
            $table->string("ip");
            $table->integer("port")->unsigned();
            $table->integer('bad_attempts')->default(0)->index();
            $table->timestamps();
            $table->unique(['ip', 'port']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proxy');
    }
}
