<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'waitlist';

    // The attributes that are mass assignable
    protected $fillable = ['email'];
}