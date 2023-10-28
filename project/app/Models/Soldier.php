<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soldier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'nationalـcode', 
        'phone_number', 
        'fatherـname', 
        'father_phone', 
        'telephone', 
        'image', 
        'address', 
        'status', 
        'service_part', 
        'dispatchـdate', 
        'divisionـdate', 
        'endـdate', 
        'brithdayـdate' 
        ] ;
}
