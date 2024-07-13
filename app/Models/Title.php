<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Title extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;

    protected $guarded = [];

    public static function get_the_first()
    {

        $the_first = DB::table('titles')->latest('id')->first();

        if ($the_first != null) {

            $the_first = $the_first->id;

        }

        return $the_first;
    }

    public function users()
    {

        return $this->hasMany('App\Models\User');

    }
}
