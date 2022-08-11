<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('executor');
            $table->integer('status_id')->unsigned();
            $table->integer('category_id')->unsigned()->nullable();
            $table->text('description');
            $table->timestamp('decision_date');
            $table->timestamps();

            $table->index('status_id');
            $table->index('category_id');

            $table->foreign('status_id')->on('states')->references('id');
            $table->foreign('category_id')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
