<?php

namespace App\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Sns extends Model
{
    protected $table = 'demo_user_sns';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
