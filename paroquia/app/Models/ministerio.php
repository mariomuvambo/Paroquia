<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministerio extends Model
{ 

    use HasFactory;

    protected $fillable = [ 
        "nameMinister",
        "finalidade",
        "tarefa_resp_minister",
        "tarefa_resp_adjunt",
        "tarefa_sector_geral",
        "sectores_minister",
    ];  
}
