<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'user_id', 'name', 'number', 'longitude', 'latitude','address'
    ];

    protected $hidden = [
        'user_id', 'created_at', 'updated_at'
    ];

    // model relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rooms()
    {
        return $this->hasMany(HospitalRoom::class);
    }
}
