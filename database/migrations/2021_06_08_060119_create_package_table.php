<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description',256)->nullable();
            $table->double('price',8,2)->nullable();
            $table->date('dateOut');
            $table->date('dateArrive');
            $table->string('address',100)->nullable();
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destination');

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
        Schema::dropIfExists('package');
    }
}
