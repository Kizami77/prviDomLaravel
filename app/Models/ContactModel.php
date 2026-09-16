<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact'; //ContactModel -> contact

    protected $fillable = [
        "email","subject","message" //fillable polja koja se mogu modifikovati i koristiti
    ];
}
