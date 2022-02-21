<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="ownerprof";

    protected $fillable = ['description','service1', 'desc1','phoneNumber', 'hotelName', 'SSM'];
}
