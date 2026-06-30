<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class TugasIdiom extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    protected $fillable = ['idiom_id', 'kkm', 'body_questions'];

    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        return $this->attributes['body_questions'] ?? '';
    }

    public function idiom()
    {
        return $this->belongsTo(\App\Models\Idiom::class, 'idiom_id', 'id');
    }

    public function jawabanIdioms()
    {
        return $this->hasMany(\App\Models\jawabanIdiom::class, 'id', 'tugas_idiom_id');
    }
}
