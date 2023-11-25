<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['name', 'phone', 'totalphone','date','time','requs','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
