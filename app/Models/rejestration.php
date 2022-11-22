<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rejestration extends Model
{
    use HasFactory;
    protected $table="rejestration";
    protected $fillable=['id','name','phoneno'];
}
