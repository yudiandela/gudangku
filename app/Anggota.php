<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    /**
     * Get the senjata that owns the anggota.
     */
    public function senjata()
    {
        return $this->hasOne('App\Senjata');
    }
}
