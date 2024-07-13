<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function get_the_first()
    {

        $the_first = DB::table('groups')->first();

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
