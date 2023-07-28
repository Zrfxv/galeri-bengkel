<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $with = ['customer', 'user', 'mechanic']; // INI ERROR CUSTOMER, MAKSUDNYA VEHICLE ?
    protected $with = ['vehicle','user', 'mechanic'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }
}
