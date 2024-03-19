<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'contacts';

    // Define the fields that are mass assignable
    protected $fillable = ['name', 'email', 'phone_number', 'note'];
}
