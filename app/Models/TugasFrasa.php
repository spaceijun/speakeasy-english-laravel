<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class TugasFrasa extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    protected $fillable = ['frasa_id', 'kkm', 'body_questions'];

    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        return $this->attributes['body_questions'] ?? '';
    }

    public function frasa()
    {
        return $this->belongsTo(\App\Models\Frasa::class, 'frasa_id', 'id');
    }

    public function jawabanFrasas()
    {
        return $this->hasMany(\App\Models\jawabanFrasa::class, 'id', 'tugas_frasa_id');
    }
}
