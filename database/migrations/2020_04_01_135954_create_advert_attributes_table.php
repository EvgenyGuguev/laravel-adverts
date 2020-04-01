<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_attributes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable()->unsigned()->index();
            $table->string('name');
            $table->string('type');
            $table->boolean('required');
            $table->json('variants');
            $table->integer('sort');


            $table->foreign('category_id')->references('id')->on('advert_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advert_attributes');
    }
}
