<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TugasHafalan extends Model
{

    use Notifiable, HasApiTokens;

    protected $perPage = 20;

    protected $fillable = ['hafalan_id', 'kkm', 'body_questions'];

    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        return $this->attributes['body_questions'] ?? '';
    }

    public function hafalan()
    {
        return $this->belongsTo(\App\Models\Hafalan::class, 'hafalan_id', 'id');
    }

    public function jawabanHafalans()
    {
        return $this->hasMany(\App\Models\jawabanHafalan::class, 'id', 'tugas_hafalan_id');
    }
}
