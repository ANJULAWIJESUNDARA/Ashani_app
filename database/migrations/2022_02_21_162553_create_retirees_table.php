<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetireesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retirees', function (Blueprint $table) {
            $table->id();
            $table->integer('house_no')->nullable();
            $table->text('full_name');
            $table->text('address');
            $table->text('contact_no')->nullable();
            $table->text('nic')->nullable();
            $table->text('pension_number')->nullable();
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
        Schema::dropIfExists('retirees');
    }
}
