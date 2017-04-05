<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nama','tpt_tgl_lahir','jenis_kelamin','agama','status_kawin','pekerjaan','no_hp','status','blok_rumah','komplek',
        'nama_kerabat','alamat_kerabat','no_hp_kerabat'
    ];

    protected $table = 'customers';
}
