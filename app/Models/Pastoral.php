<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pastoral extends Model
{
    //

    protected $fillable = [

        'user_id',
        'member_id',
        'discussion',
        'observations'

    ];



    public function member()
    {

        return $this->belongsTo(
            Membres::class,
            'member_id'
        );

    }



    public function user()
    {

        return $this->belongsTo(
            User::class,
            'user_id'
        );

    }
}
