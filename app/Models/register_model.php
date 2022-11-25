<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_model extends Model
{
    use HasFactory;
    protected $table =  'register';
    protected $fillable = ['name','email','password'];
}
