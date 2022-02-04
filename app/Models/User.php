<?php

namespace App\Models;

use App\Notifications\VerifyPhoneNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'media_id',
        'username',
        'email',
        'phone',
        'wallet',
        'job',
        'national_number',
        'point',
        'ip',
        'password',
        'status',
        'two_factor_method',
        'two_factor',
        'is_superuser',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appedns = ['profile'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const TWO_FACTOR_SMS = "sms";
    const TWO_FACTOR_EMAIL = "email";
    static $two_factor_types = [self::TWO_FACTOR_SMS, self::TWO_FACTOR_EMAIL];


    const ACTIVE_STATUS = "active";
    const INACTIVE_STATUS = "inactive";
    static $statuses = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }


    public function getProfileAttribute()
    {
        if(!is_null($this->media))  return $this->media->thumb();

        return asset('panel/assets/media/svg/files/blank-image.svg');

    }


    public function sendPhoneVerificationNotification($phone)
    {
        new VerifyPhoneNotification($phone);
    }
}
