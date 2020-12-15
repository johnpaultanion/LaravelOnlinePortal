<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use IvanoMatteo\LaravelDeviceTracking\Traits\UseDevices;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UseDevices;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'school',
        'school_address',
        'yeargrad',
        'mobile_number',
        'email',
        'password',
        'provider_id',
        'role',
        'device_uuid',
        'is_paid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function lessons(){
        return $this->hasMany(Lesson::class);
    }


}
