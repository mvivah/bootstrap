<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable;

    public $incrementing = false;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function theadmin()
    {
        $admin = DB::table('users')->latest('id')->first();

        if ($admin != null) {

            $admin = $admin->id;

        } else {

        }

        return $admin;
    }

    public function comments()
    {

        return $this->hasMany('App\Models\Comment');

    }

    public function department()
    {

        return $this->belongsTo('App\Models\Department');

    }

    public function title()
    {

        return $this->belongsTo('App\Models\Title');

    }

    public function group()
    {

        return $this->belongsTo('App\Models\Group');

    }
}
