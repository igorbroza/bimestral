<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docencia extends Model
{
    use HasFactory;

    protected $fillable = ['professore_id','disciplina_id','ano'];

    
}
