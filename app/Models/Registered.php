<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="registered_provider";
    protected $fillable = ['id','reg_id', 'place','detail'];
}
