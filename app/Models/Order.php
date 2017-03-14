<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'title',
        'category',
        'priority',
        'description',
        'date',
        'expected'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
