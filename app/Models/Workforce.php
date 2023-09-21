<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workforce extends Model
{
    use HasFactory;

    protected $table = 'workforce';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
