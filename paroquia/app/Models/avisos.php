<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avisos extends Model
{
    use HasFactory;

    protected $table = "avisos";
    protected $fillable = ['title', 'participants' ,'description', 'address', 'date_execution', 'date_notice', 'warningTime'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
