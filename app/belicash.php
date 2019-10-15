<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belicash extends Model
{
    protected $fillable = ['kode', 'no_ktp', 'motor_kode', 'tanggal_cash', 'bayar_cash'];

    public $timestamps = true;

    public function motors()
    {
        return $this->belongsTo('App\motor','id_motor');
    }
}
