<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildHome extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'child_homes';
}
