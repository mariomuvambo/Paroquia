<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'message'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
