<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifyAvisos extends Model
{
    use HasFactory;
    protected $table = "notifyavisos";
    protected $fillable = [
        'title',
        'Address',
        'participants',
        'warningTime',
        'description',
        'startDate',
        'endDate'
    
    ]
}
