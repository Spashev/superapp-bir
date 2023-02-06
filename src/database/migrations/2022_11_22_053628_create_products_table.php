<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->unique();
            $table->string('price_per_night');
            $table->string('price_per_week')->nullable();
            $table->string('price_per_month')->nullable();
            $table->unsignedBigInteger('manager_id')->index();
            $table->float('rating')->default(0);
            $table->bigInteger('rooms_qty')->default(1);
            $table->bigInteger('guest_qty')->default(1);
            $table->bigInteger('bed_qty')->default(1);
            $table->bigInteger('toilet')->default(1);
            $table->bigInteger('bedroom')->default(1);
            $table->bigInteger('bath')->default(1);
            $table->boolean('swimming_pool')->default(false);
            $table->boolean('trestle_bed')->default(false);
            $table->boolean('sauna')->default(false);
            $table->string('address');
            $table->string('description');
            $table->boolean('is_active')->default(false);
            $table->boolean('status')->default(true);
            $table->string('slug');
            $table->timestamps();

            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
