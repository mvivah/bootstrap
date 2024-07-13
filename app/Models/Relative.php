<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relative extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;

    protected $guarded = [];

    public function child()
    {
        return $this->belongsTo('App\Models\Child');
    }

    public function visits()
    {
        return $this->hasMany('App\Models\Visit', 'relative_id');
    }
}
