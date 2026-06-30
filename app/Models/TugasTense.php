<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class TugasTense
 *
 * @property $id
 * @property $tenses_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property Tense $tense
 * @property SpeakeasyEnglish.jawabanTense[] $speakeasyEnglish.jawabanTenses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasTense extends Model
{

    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tenses_id', 'kkm', 'body_questions'];

    /**
     * Get body_questions as formatted HTML for CKEditor.
     */
    protected $appends = ['body_questions_html'];

    public function getBodyQuestionsHtmlAttribute(): string
    {
        if (empty($this->attributes['body_questions'])) {
            return '';
        }

        $data = json_decode($this->attributes['body_questions'], true);

        if (!is_array($data)) {
            return $this->attributes['body_questions'];
        }

        $html = '<ul>';
        foreach ($data as $item) {
            $question = htmlspecialchars($item['question'] ?? '', ENT_QUOTES, 'UTF-8');
            $answer = htmlspecialchars($item['answer'] ?? '', ENT_QUOTES, 'UTF-8');
            $html .= "<li><strong>Q:</strong> {$question}<br/><strong>A:</strong> {$answer}</li>";
        }
        $html .= '</ul>';

        return $html;
    }

    /**
     * Set body_questions (store as JSON).
     */
    public function setBodyQuestionsAttribute($value): void
    {
        if (is_array($value)) {
            $this->attributes['body_questions'] = json_encode($value);
        } else {
            $this->attributes['body_questions'] = $value;
        }
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tense()
    {
        return $this->belongsTo(\App\Models\DetailTense::class, 'tenses_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanTenses()
    {
        return $this->hasMany(\App\Models\jawabanTense::class, 'id', 'tugas_tenses_id');
    }
}
