<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
