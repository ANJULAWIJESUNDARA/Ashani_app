<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormerGNSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('former_g_n_s', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->date('service_time');
            $table->enum('type' ,['acting' ,'permanent']);
            $table->enum('is_relocation' ,['relocation' ,'retirement']);
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
        Schema::dropIfExists('former_g_n_s');
    }
}
