<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class School extends Model
{
    use HasFactory,HasUuids;

    public $incrementing = false;

    protected $guarded = [];

    public function children()
    {
        return $this->belongsToMany('App\Models\Child');
    }
}
