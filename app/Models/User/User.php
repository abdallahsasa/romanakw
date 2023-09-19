<?php

namespace App\Models\User;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Car\car;
use App\Models\Post\Post;
use App\Models\Restaurant\restaurant;
use App\Models\Service\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'image_url',
        'phone',
        'email',
        'password',
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
        'password' => 'hashed',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class,'user_id');
    }
    public function cars()
    {
        return $this->hasMany(Car::class,'user_id');
    }
    public function jobs()
    {
        return $this->hasMany(Car::class,'user_id');
    }
    public function realestate()
    {
        return $this->hasMany(Car::class,'user_id');
    }
    public function service()
    {
        return $this->hasMany(Service::class,'user_id');
    }
    public function restaurant()
    {
        return $this->hasMany(Restaurant::class,'user_id');
    }
}
