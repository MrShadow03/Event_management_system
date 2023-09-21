<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_name',
        'detail_value',
    ];

    public function getFormattedDetailsAttribute()
    {
        return $this->pluck('detail_value', 'detail_name')->toArray();
    }
}
