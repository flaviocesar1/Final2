<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'user_id'
    ];

    public function donoDaAvaliacao() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Tutor() {
        return $this->belongsToMany(Tutor::class, 'avaliacaotutor')->withTimestamps();
    }
    
}
