<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected  $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function rentals(){
        return $this->hasMany(Rental::class);
    }

    public function repairs(){
        return $this->hasMany(Repair::class);
    }
}
