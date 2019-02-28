<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'telefono', 'correo','comentarios'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
