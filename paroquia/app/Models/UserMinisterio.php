<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMinisterio extends Model
{
    use HasFactory;

    protected $fillable = [
        'selecioneMinisterio',
        'nome',
        'apelido',
        'contacto',
        'user_id'       
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
