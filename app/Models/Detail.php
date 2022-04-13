<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table="detail_provider";

    protected $fillable = ['phoneNumber', 'hotelName', 'address', 'SSM'];
}
