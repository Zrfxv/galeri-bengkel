<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['vehicles'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
