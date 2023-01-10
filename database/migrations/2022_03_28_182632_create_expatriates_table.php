<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpatriatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expatriates', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->date('depature_date');
            $table->text('house_no');
            $table->string('nic');
            $table->string('country');
            $table->text('reason');
            $table->string('passport_no');
            $table->enum('is_dual_citizen' ,['yes' ,'no'])->default('no');
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
        Schema::dropIfExists('expatriates');
    }
}
