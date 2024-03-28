<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;
    protected $table = "notifications";
    protected $fillable = [
        'title',
        'Address',
        'participants',
        'warningTime',
        'description',
        'DateNotice',
        'DateExecution',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
