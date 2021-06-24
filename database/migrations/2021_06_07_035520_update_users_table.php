<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 16)->after('password')->default('0');
            $table->string('curp')->unique()->nullable()->after('phone');
            $table->date('birthdate')->after('curp');
            $table->string('status', 1)->after('birthdate')->default('0');
            $table->string('range', 1)->after('status')->default('0');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
