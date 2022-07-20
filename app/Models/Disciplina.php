<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Disciplina extends Model {

    use HasFactory;
    
    protected $table = "disciplinas";

    protected $fillable = ['nome', 'curso_id', 'carga'];
    public function curso() {
        return $this->belongsTo('\App\Models\Curso');
    }

    public function area() {
        return $this->belongsTo('\App\Models\Area');
    }
}
