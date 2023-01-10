<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateSectorEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_sector_employees', function (Blueprint $table) {
            $table->id();
            $table->text('occupation')->nullable();
            $table->text('full_name');
            $table->text('address');
            $table->text('contact_no')->nullable();
            $table->text('nic')->nullable();
            $table->text('designation')->nullable();
            $table->text('company')->nullable();
            $table->text('duration')->nullable();
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
        Schema::dropIfExists('private_sector_employees');
    }
}
