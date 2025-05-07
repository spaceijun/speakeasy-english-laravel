<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class TugasIdiom
 *
 * @property $id
 * @property $idiom_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property Idiom $idiom
 * @property SpeakeasyEnglish.jawabanIdiom[] $speakeasyEnglish.jawabanIdioms
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasIdiom extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idiom_id', 'kkm', 'body_questions'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiom()
    {
        return $this->belongsTo(\App\Models\Idiom::class, 'idiom_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanIdioms()
    {
        return $this->hasMany(\App\Models\jawabanIdiom::class, 'id', 'tugas_idiom_id');
    }
}
