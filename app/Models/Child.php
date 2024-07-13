<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;

    protected $guarded = [];

    public function school()
    {
        return $this->belongsToMany('App\Models\School');
    }

    public function relatives()
    {
        return $this->hasMany('App\Models\Relative');
    }

    public function visits()
    {
        return $this->hasMany('App\Models\Visit');
    }

    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }

    public function homes()
    {
        return $this->belongsToMany('App\Models\Home');
    }

    public function cases()
    {
        return $this->hasMany('App\Models\Kase');
    }

    public function evaluations()
    {
        return $this->hasMany('App\Models\Evaluation');
    }
}
