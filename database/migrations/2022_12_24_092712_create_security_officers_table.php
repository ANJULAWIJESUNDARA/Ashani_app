<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_officers', function (Blueprint $table) {
            $table->id();
            $table->text('service_number')->nullable();
            $table->text('full_name');
            $table->text('address');
            $table->text('contact_no')->nullable();
            $table->text('nic')->nullable();
            $table->text('rank')->nullable();
            $table->text('department')->nullable();
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
        Schema::dropIfExists('security_officers');
    }
}
