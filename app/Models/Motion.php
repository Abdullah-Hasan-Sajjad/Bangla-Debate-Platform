<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
    use HasFactory;
    protected $fillable = [
        'motionName',
        'motionDescription',
        'motionCreateDateTime',
        'motionUploadDateTime',
    ];
    protected $guarded = [
        'motionID',
    ];
}