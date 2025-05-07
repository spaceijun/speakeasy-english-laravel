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
