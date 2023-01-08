<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    //protected $table = 'finance';
    protected $fillable = [
        'id',
        'customer_id',
        'test_id',
        'date',
        'amount',
        'remaining',
        'note',
        'created_at',
        'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
