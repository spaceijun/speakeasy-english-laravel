<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class TugasGrammar extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    protected $fillable = ['grammars_id', 'kkm', 'body_questions'];

    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        return $this->attributes['body_questions'] ?? '';
    }

    public function detailGrammar()
    {
        return $this->belongsTo(\App\Models\DetailGrammar::class, 'grammars_id', 'id');
    }

    public function jawabanGrammars()
    {
        return $this->hasMany(\App\Models\jawabanGrammar::class, 'id', 'tugas_grammars_id');
    }
}
