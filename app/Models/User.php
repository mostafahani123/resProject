<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['FullName','Image','Email','password','mobile','location','role'];
   


    //   public function getFristNameLastNameRoleAttribute(){
    //             //   return strtoupper($this->fristname);

    //             return $this->fristname . " " . $this->Lastname . " " . $this->role;
    //             }
    //             public function getCreatedAteAttribute(){
    //                 // return $this->created_at->format('m/d/y');
    //                 return time($this->created_at);
    //             }


    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
