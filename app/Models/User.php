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
        'name',
        'surname',
        'phone',
        'iin',
        'hospital_id',
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
        'password' => 'hashed',
    ];

    public function getRoleName() {
        $roleString = '';
        if($this->role == 0) $roleString = 'Пользователь';
        elseif($this->role == 1) $roleString = 'Врач';
        elseif($this->role == 2) $roleString = 'Главврач';
        return $roleString;
    }

    public function getFullname() {
        return $this->name.' '.$this->surname;
    }

    public function allergies(){
        return $this->HasMany('App\Models\Allergy');
    }
    
    public function medications(){
        return $this->HasMany('App\Models\Medication');
    }

    public function diseases(){
        return $this->HasMany('App\Models\Disease');
    }

    public function contacts(){
        return $this->HasMany('App\Models\Contact');
    }

    public function hospital(){
        return $this->belongsTo('App\Models\Hospital');
    }
}
