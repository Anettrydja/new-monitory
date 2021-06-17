<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table -> id();
            $table -> string('name');
            $table -> string('platform');
            $table -> string('url');
            $table -> string('server_address');
            $table -> string('server_place');
            $table -> string('contact');
            $table -> string('version');
            $table -> string('comments');
            $table -> string('client');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
