<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function rentals(){
        return $this->hasMany(Rental::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
