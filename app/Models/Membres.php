<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membres extends Model
{
    //
    Use SoftDeletes, HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'gender', 'phone', 'address', 'marital_status', 'spouse_name', 'marriage_date', 'marriage_type', 'children_count', 'church_join_date', 'previous_church', 'water_baptism', 'holy_spirit_baptism', 'previous_church_service', 'slm_discipleship', 'department', 'profession', 'professional_skills', 'birth_date', 'deleted_at','status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pastoral()
    {
        return $this->hasMany(Pastoral::class);
    }
}
