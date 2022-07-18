<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professore extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'siape', 'eixo_id', 'ativo'];
}
