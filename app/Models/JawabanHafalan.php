<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class JawabanHafalan
 *
 * @property $id
 * @property $user_id
 * @property $tugas_hafalan_id
 * @property $body_answers
 * @property $nilai
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property TugasHafalan $tugasHafalan
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class JawabanHafalan extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'tugas_hafalan_id', 'body_answers', 'nilai', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tugasHafalan()
    {
        return $this->belongsTo(\App\Models\TugasHafalan::class, 'tugas_hafalan_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
