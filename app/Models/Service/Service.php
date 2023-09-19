<?php

namespace App\Models\Service;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
