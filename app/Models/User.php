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
        'telefono',
        'email',
        'password',
        'tipo',
        'empresa',
        'licencia',
        'licencia_exp',
        'direccion',
        'ciudad',
        'pais',
        'rol_id'
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

    public function gastos(){
        return $this->hasMany(Gasto::class);
    }

    public function cargas(){
        return $this->hasMany(Carga::class);
    }

    public function rol(){
        return $this->belongsTo(Rol::class);
    }

    public function contratos(){
        return $this->hasMany(Contrato::class);
    }
}
