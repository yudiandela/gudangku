<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senjata extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the anggota that owns the senjata.
     */
    public function anggota()
    {
        return $this->belongsTo('App\Anggota');
    }
}
