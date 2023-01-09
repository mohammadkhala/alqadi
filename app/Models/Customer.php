<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    use HasFactory;
    //protected $primaryKey='personal_id';
    protected $fillable = [
       'id',
        'personal_id',
        'name',
        'clinic',
        'start_date',
        'phone',
        'address',
        'note',
        'gender',
        'created_at',
        'updated_at'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function personalTests()
    {
        return $this->hasMany(PersonalTest::class);
    }
    public function test()
    {
        return $this->hasMany(Test::class);
    }

    public function finance()
    {
        return $this->hasMany(Finance::class);
    }


}
