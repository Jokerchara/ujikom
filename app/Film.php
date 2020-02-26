<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'judul', 'slug', 'foto',
        'konten', 'id_user'
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
