<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    protected $table = 'page_section';

    protected $fillable = [
        'page_id',
        'section_id',
        'status',
    ];
}
