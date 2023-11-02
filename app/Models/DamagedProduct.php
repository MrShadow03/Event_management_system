<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamagedProduct extends Model
{
    use HasFactory;

    protected $table = 'damaged_products';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function rental(){
        return $this->belongsTo(Rental::class);
    }

    public function invoice(){
        return $this->hasOneThrough(Invoice::class, Rental::class);
    }
}
