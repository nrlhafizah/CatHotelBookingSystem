<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="search";
    protected $fillable = ['id','place','detail'];
}
