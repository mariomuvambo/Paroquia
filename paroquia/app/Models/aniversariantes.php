<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aniversariantes extends Model
{
    use HasFactory;
    
        protected $fillable = [ 
        "name",
        "surname",
        "date_birth",
        "gender",
        "image",
        "status",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
