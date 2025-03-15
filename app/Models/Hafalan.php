<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hafalan
 *
 * @property $id
 * @property $category_id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property SpeakeasyEnglish.detailHafalan[] $speakeasyEnglish.detailHafalans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hafalan extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'hafalan';
    protected $fillable = ['category_id', 'name', 'images', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailHafalans()
    {
        return $this->hasMany(\App\Models\detailHafalan::class, 'id', 'hafalan_id');
    }
}
