<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $guarded = [];

    //Untuk menghubungkan/menarik model jabatan ke model karyawan:
    public function jabatan() {
        return $this->belongsTo('App\Jabatan', 'id_jabatan');
        //belongsTo('Directory model', 'foreign key')
    }
}
