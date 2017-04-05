<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('formulir')->nullable();
            $table->string('ktp')->nullable();
            $table->string('s_nikah')->nullable();
            $table->string('npwp')->nullable();
            $table->string('k_keluarga')->nullable();
            $table->string('ft_warna')->nullable();
            $table->string('rek_koran')->nullable();
            $table->string('b_tabungan')->nullable();
            $table->string('sk_kerja')->nullable();
            $table->string('sk_awal_pns')->nullable();
            $table->string('sk_akhir_pns')->nullable();
            $table->string('slip_gj')->nullable();
            $table->string('sk_tamb_gaji')->nullable();
            $table->string('ftcp_bk_tab_btn')->nullable();
            $table->string('f_kantor')->nullable();
            $table->string('sket_kantor')->nullable();
            $table->string('wawancara')->nullable();
            $table->string('peng_lpa')->nullable();
            $table->string('peng_akad')->nullable();
            $table->string('akad')->nullable();
            $table->string('imb_asli')->nullable();
            $table->string('listrik')->nullable();
            $table->string('pdam')->nullable();
            $table->string('jalan')->nullable();
            $table->string('saluran')->nullable();
            $table->integer('dana_tahanan')->nullable();        
            $table->string('pencarian')->nullable();
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
        Schema::dropIfExists('berkas');
    }
}
