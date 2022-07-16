<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacaotutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'avaliacao_id',
        'tutor_id', 
    ];

    public $incrementing = true;

    public function avaliacao()
    {
        return $this->belongsTo(Avaliacao::class);
    }
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
