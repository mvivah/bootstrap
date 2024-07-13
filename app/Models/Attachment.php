<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attachment extends Model
{
    use HasFactory,HasUuids;

    public $incrementing = false;

    protected $guarded = [];
}
