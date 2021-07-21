<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $fillable = ['kode_undangan','no_registrasi','username','password','no_ktp','nama','tgl_lahir','ahli_waris','hubungan','no_hp','alamat','kota','provinsi','no_rek_dana','foto_ktp','foto_selfie'];
}
