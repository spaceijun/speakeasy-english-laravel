<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TugasHafalan
 *
 * @property $id
 * @property $hafalan_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property Hafalan $hafalan
 * @property English.jawabanHafalan[] $english.jawabanHafalans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasHafalan extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['hafalan_id', 'kkm', 'body_questions'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hafalan()
    {
        return $this->belongsTo(\App\Models\Hafalan::class, 'hafalan_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanHafalans()
    {
        return $this->hasMany(\App\Models\jawabanHafalan::class, 'id', 'tugas_hafalan_id');
    }
}
