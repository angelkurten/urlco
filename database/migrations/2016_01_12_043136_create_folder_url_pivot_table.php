<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolderUrlPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_url', function (Blueprint $table) {
            $table->integer('folder_id')->unsigned()->index();
            $table->foreign('folder_id')->references('id')->on('folders');
            $table->integer('url_id')->unsigned()->index();
            $table->foreign('url_id')->references('id')->on('urls');
            $table->primary(['folder_id', 'url_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('folder_url');
    }
}
