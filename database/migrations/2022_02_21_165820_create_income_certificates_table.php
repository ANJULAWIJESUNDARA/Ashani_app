<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_certificates', function (Blueprint $table) {
            $table->id();
            $table->text('full_name');
            $table->date('date')->nullable();
            $table->text('address');
            $table->text('contact_no')->nullable();
            $table->text('path_of_income')->nullable();
            $table->decimal('monthly_income')->nullable();
            $table->decimal('annual_income')->nullable();

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
        Schema::dropIfExists('income_certificates');
    }
}
