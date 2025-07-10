<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('vin')->nullable();
            $table->string('lot')->nullable();
            $table->string('location')->nullable();
            $table->string('date')->nullable(); // stored as string
            $table->string('state')->nullable();
            $table->string('damages')->nullable();
            $table->string('sale_type')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('min_price')->nullable();
            $table->string('avg_price')->nullable();
            $table->string('max_price')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->string('body')->nullable();
            $table->string('mileage')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('drive')->nullable();
            $table->string('keys_')->nullable();
            $table->string('engine')->nullable();
            $table->string('color')->nullable();
            $table->string('width')->nullable();
            $table->string('length')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('seats')->nullable();
            $table->string('speed')->nullable();
            $table->text('description')->nullable();
            $table->json('images')->nullable(); // JSON array of image paths
        });
    }

    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
