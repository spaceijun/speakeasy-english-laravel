<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class TugasGrammar
 *
 * @property $id
 * @property $grammars_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailGrammar $detailGrammar
 * @property SpeakeasyEnglish.jawabanGrammar[] $speakeasyEnglish.jawabanGrammars
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasGrammar extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['grammars_id', 'kkm', 'body_questions'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detailGrammar()
    {
        return $this->belongsTo(\App\Models\DetailGrammar::class, 'grammars_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanGrammars()
    {
        return $this->hasMany(\App\Models\jawabanGrammar::class, 'id', 'tugas_grammars_id');
    }
}
