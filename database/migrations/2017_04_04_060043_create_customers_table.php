<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tpt_tgl_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('agama');
            $table->string('status_kawin');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('status');
            $table->string('blok_rumah');
            $table->string('komplek');
            $table->string('nama_kerabat')->nullable();
            $table->text('alamat_kerabat')->nullable();
            $table->string('no_hp_kerabat')->nullable();
            
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
        Schema::dropIfExists('customers');
    }
}
