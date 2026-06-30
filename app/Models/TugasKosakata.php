<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class TugasKosakata extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    protected $fillable = ['kosakatas_id', 'kkm', 'body_questions'];

    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        return $this->attributes['body_questions'] ?? '';
    }

    public function kosakata()
    {
        return $this->belongsTo(\App\Models\Kosakata::class, 'kosakatas_id', 'id');
    }

    public function jawabanKosakatas()
    {
        return $this->hasMany(\App\Models\jawabanKosakata::class, 'id', 'tugas_kosakatas_id');
    }
}
