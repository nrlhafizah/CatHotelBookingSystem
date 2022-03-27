<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="provider";
    protected $fillable = ['id','name', 'email','phoneNumber', 'hotelName', 'SSM', 'reason'];
}
