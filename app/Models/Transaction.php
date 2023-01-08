<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    //protected $table='transaction';
    protected $fillable = [
        'id',
        'finance_id',
        'payment',
        'date',
        'note',
        'created_at',
        'updated_at'
    ];


    public function finance(){
        return $this->belongsToMany(Finance::class);
    }

}
