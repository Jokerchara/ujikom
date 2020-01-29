<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $fillable = [
        'nama', 'slug', 'foto',
        'konten', 'alamat', 'id_user'
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
