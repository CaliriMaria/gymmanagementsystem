<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRole($roles): bool
    {
        foreach($roles as $role){
            if($this->hasRole($role)){
                return true;
            }
        }
        return false;
    }

    public function membership(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Membership::class);
    }

    public function subscription()
    {
        return $this->belongsTo('subscription');
    }
    public function lesson()
    {
        return $this->belongsTo('lessons');
    }

    public  function payment()
    {
        return $this->belongsTo('payments');
    }

    public function booking()
    {
        return $this->belongsTo('bookings');
    }

    public function checkin()
    {
        return $this->belongsTo('checkins');
    }
}
