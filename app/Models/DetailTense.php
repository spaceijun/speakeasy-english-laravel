<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class DetailTense
 *
 * @property $id
 * @property $name
 * @property $images
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property SpeakeasyEnglish.materiTense[] $speakeasyEnglish.materiTenses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailTense extends Model
{
    use HasApiTokens;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'images', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiTenses()
    {
        return $this->hasMany(\App\Models\materiTense::class, 'id', 'detail_tenses_id');
    }
}
